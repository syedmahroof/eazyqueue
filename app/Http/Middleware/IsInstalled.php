<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class IsInstalled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            DB::connection()->getPdo();
            if (file_exists(base_path('/app/Http/Controllers/InstallerController.php')) && file_exists(base_path('/app/Repositories/InstallerRepository.php')) && file_exists(base_path('/config/installer.php')) && Setting::first() && Setting::first()->installed == 0) {
                return redirect()->route('install');
            } else if (file_exists(base_path('/app/Http/Controllers/InstallerController.php')) && file_exists(base_path('/app/Repositories/InstallerRepository.php')) && file_exists(base_path('/config/installer.php')) && Setting::first() && Setting::first()->installed == 1) {
                if ($request->path() != 'login') return redirect()->route('login');
            } else if (!file_exists(base_path('/app/Http/Controllers/InstallerController.php')) && !file_exists(base_path('/app/Repositories/InstallerRepository.php')) && !file_exists(base_path('/config/installer.php')) && Setting::first() && Setting::first()->installed == 2) {
            } else {
                Setting::first();
                return redirect()->route('files-currupted');
            }
        } catch (Throwable $th) {
            if (file_exists(base_path('/app/Http/Controllers/InstallerController.php')) && file_exists(base_path('/app/Repositories/InstallerRepository.php')) && file_exists(base_path('/config/installer.php'))) {
                return redirect()->route('install');
            }
            return redirect()->route('files-currupted');
        }
        return $next($request);
    }
}
