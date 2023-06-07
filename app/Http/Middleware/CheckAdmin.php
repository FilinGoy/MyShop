<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

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
            dd(Auth::user());
            if (Auth::user() === null || Auth::user()->position_id !== 2) {
                return redirect()->to(asset('/'));
            }
        } catch (TokenInvalidException $e) {
            return response()->json(['status' => 'Токен недействителен']);
        } catch (TokenExpiredException $e) {
            return response()->json(['status' => 'Срок действия токена истек']);
        } catch (Exception $e) {
            return response()->json(['status' => 'Токен авторизации не найден']);
        }
        return $next($request);
    }
}
