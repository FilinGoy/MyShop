<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function listReviews($product)
    {
        $tempReviews = Review::where('product_id', $product)->with('user')->orderByDesc('updated_at')->get();
        $reviews = $tempReviews->take(10);
        $count = $tempReviews->count();
        return compact('reviews', 'count');
    }

    public function addReview(Request $request, $product) {
        $request['product'] = $product;
        unset($product);
        $data = $request->validate([
            'rate' => 'required|min:1',
            'user' => 'required',
            'product' => 'required',
            'content' => 'nullable'
        ],[
            'rate.required' => 'Требуется выбрать оценку!',
            'rate.min' => 'Оценка товара не может быть меньше 1!',
            'user.required' => 'Вы должны быть авторизированы, чтобы оставлять отзывы!',
            'product.required' => 'Ошибка получения товара'
        ]);

        $review = Review::where('user_id', $data['user'])->where('product_id', $data['product'])->first();

        if ($review) {
            $review->rate = $data['rate'];
            $review->content = $data['content'];
            $review->save();
        } else {
            Review::create([
                'user_id' => $data['user'],
                'product_id' => $data['product'],
                'published' => 1,
                'date' => now(),
                'rate' => $data['rate'],
                'content' => $data['content']
            ]);
        }
    }

    public function removeReview(Request $request, Review $review) {
        $position = User::where('id', $request->user)->pluck('position_id')->first();
        if ($position == 2)
        {
            $review->delete();
        }
    }
}
