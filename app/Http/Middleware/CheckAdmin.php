<?php

namespace App\Http\Middleware;

use JWTAuth;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $headers = apache_request_headers();
            $val = $_COOKIE['user'] ?? redirect()->to(asset('/'));
            $request->headers->set('authorization', "Bearer " . $val);
            $user = $request->user();
            if (Auth::user() === null || Auth::user()->position_id !== 4) {
                return redirect()->to(asset('/'));
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['status' => 'Токен недействителен']);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['status' => 'Срок действия токена истек']);
        } catch (Exception $e) {
            return response()->json(['status' => 'Токен авторизации не найден']);
        }
        return $next($request);
    }
}
