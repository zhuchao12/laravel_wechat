<?php



namespace App\Http\Middleware;



use Closure;



class LoginStatus

{

    /**

     * Handle an incoming request.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \Closure  $next

     * @return mixed

     */

    public function handle($request, Closure $next)

    {

        $is_login = $request->get('is_login');

        if($is_login == 0){

            echo '非法请求';

            header("refresh:2,url='/'");

            exit;

        }

        return $next($request);

    }

}