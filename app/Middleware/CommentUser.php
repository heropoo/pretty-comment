<?php
/**
 * Date: 2018/9/24
 * Time: 11:45
 */

namespace App\Middleware;

use App\Models\Account;
use Closure;
use Moon\Request\Request;

class CommentUser
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $app_id = $request->header('app-id');
//        $app_key = $request->header('app-key');
//
//        if (empty($app_id) || empty($app_key)) {
//            return [
//                'code' => 401,
//                'msg' => 'Unauthorized.'
//            ];
//        }
//
//        //todo token
//
//
//        $account = Account::find()
//            ->where('app_id=? and app_key=? and status=' . Account::STATUS_NORMAL, [$app_id, $app_key])
//            ->first();
//        if (empty($account)) {
//            return [
//                'code' => 401,
//                'msg' => 'Unauthorized.'
//            ];
//        }
//
//        \App::$container->add('account', $account);

        return $next($request);
    }
}