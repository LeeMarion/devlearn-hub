<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', [HomeController::class, 'home']);

route::get('/home', [HomeController::class, 'index']);



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () 
{
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("/addcourse", [HomeController::class,"addcourse"]);
Route::get("/showcourse", [HomeController::class,"showcourse"]);
Route::get('/deletecourse/{id}',[HomeController::class,'deletecourse']);
Route::post('/createcourse',[HomeController::class,'createcourse']);



Route::get("/coursemod", [HomeController::class,"coursemod"]);
Route::get("/compfunda", [HomeController::class,"compfunda"]);
Route::get("/labenv", [HomeController::class,"labenv"]);
Route::get("/dsa", [HomeController::class,"dsa"]);

Route::get("/python", [HomeController::class,"python"]);
Route::get("/intro", [HomeController::class,"intro"]);
Route::get("/data", [HomeController::class,"data"]);
Route::get("/list", [HomeController::class,"list"]);
Route::get("/syntax", [HomeController::class,"syntax"]);
Route::get("/variables", [HomeController::class,"variables"]);
Route::get("/operators", [HomeController::class,"operators"]);
Route::get("/condition", [HomeController::class,"condition"]);
Route::get("/while", [HomeController::class,"while"]);
Route::get("/for", [HomeController::class,"for"]);

Route::get("/java", [HomeController::class,"java"]);
Route::get("/jintro", [HomeController::class,"jintro"]);
Route::get("/jdata", [HomeController::class,"jdata"]);
Route::get("/jlist", [HomeController::class,"jlist"]);
Route::get("/jsyntax", [HomeController::class,"jsyntax"]);
Route::get("/jvariables", [HomeController::class,"jvariables"]);
Route::get("/joperators", [HomeController::class,"joperators"]);
Route::get("/jcondition", [HomeController::class,"jcondition"]);
Route::get("/jwhile", [HomeController::class,"jwhile"]);
Route::get("/jfor", [HomeController::class,"jfor"]);

Route::get("/kotlin", [HomeController::class,"kotlin"]);
Route::get("/kintro", [HomeController::class,"kintro"]);
Route::get("/kdata", [HomeController::class,"kdata"]);
Route::get("/klist", [HomeController::class,"klist"]);
Route::get("/ksyntax", [HomeController::class,"ksyntax"]);
Route::get("/kvariables", [HomeController::class,"kvariables"]);
Route::get("/koperators", [HomeController::class,"koperators"]);
Route::get("/kcondition", [HomeController::class,"kcondition"]);
Route::get("/kwhile", [HomeController::class,"kwhile"]);
Route::get("/kfor", [HomeController::class,"kfor"]);

Route::get("/javascript", [HomeController::class,"javascript"]);
Route::get("/jsintro", [HomeController::class,"jsintro"]);
Route::get("/jsdata", [HomeController::class,"jsdata"]);
Route::get("/jslist", [HomeController::class,"jslist"]);
Route::get("/jssyntax", [HomeController::class,"jssyntax"]);
Route::get("/jsvariables", [HomeController::class,"jsvariables"]);
Route::get("/jsoperators", [HomeController::class,"jsoperators"]);
Route::get("/jscondition", [HomeController::class,"jscondition"]);
Route::get("/jswhile", [HomeController::class,"jswhile"]);
Route::get("/jsfor", [HomeController::class,"jsfor"]);

Route::get("/html", [HomeController::class,"html"]);
Route::get("/hintro", [HomeController::class,"hintro"]);
Route::get("/hbasic", [HomeController::class,"hbasic"]);
Route::get("/helements", [HomeController::class,"helements"]);
Route::get("/hattributes", [HomeController::class,"hattributes"]);
Route::get("/hheadings", [HomeController::class,"hheadings"]);
Route::get("/hparagraphs", [HomeController::class,"hparagraphs"]);
Route::get("/hstyles", [HomeController::class,"hstyles"]);
Route::get("/hlists", [HomeController::class,"hlists"]);

Route::get("/css", [HomeController::class,"css"]);
Route::get("/cintro", [HomeController::class,"cintro"]);
Route::get("/csyntax", [HomeController::class,"csyntax"]);
Route::get("/chow", [HomeController::class,"chow"]);
Route::get("/ccolors", [HomeController::class,"ccolors"]);
Route::get("/cborder", [HomeController::class,"cborder"]);
Route::get("/cmargin", [HomeController::class,"cmargin"]);
Route::get("/cpadding", [HomeController::class,"cpadding"]);
Route::get("/chw", [HomeController::class,"chw"]);

Route::get("/cp", [HomeController::class,"cp"]);
Route::get("/cpintro", [HomeController::class,"cpintro"]);
Route::get("/cpdata", [HomeController::class,"cpdata"]);
Route::get("/cplist", [HomeController::class,"cplist"]);
Route::get("/cpsyntax", [HomeController::class,"cpsyntax"]);
Route::get("/cpvariables", [HomeController::class,"cpvariables"]);
Route::get("/cpoperators", [HomeController::class,"cpoperators"]);
Route::get("/cpcondition", [HomeController::class,"cpcondition"]);
Route::get("/cpwhile", [HomeController::class,"cpwhile"]);
Route::get("/cpfor", [HomeController::class,"cpfor"]);

Route::get("/cplus", [HomeController::class,"cplus"]);
Route::get("/cplusintro", [HomeController::class,"cplusintro"]);
Route::get("/cplusdata", [HomeController::class,"cplusdata"]);
Route::get("/cpluslist", [HomeController::class,"cpluslist"]);
Route::get("/cplussyntax", [HomeController::class,"cplussyntax"]);
Route::get("/cplusvariables", [HomeController::class,"cplusvariables"]);
Route::get("/cplusoperators", [HomeController::class,"cplusoperators"]);
Route::get("/cpluscondition", [HomeController::class,"cpluscondition"]);
Route::get("/cpluswhile", [HomeController::class,"cpluswhile"]);
Route::get("/cplusfor", [HomeController::class,"cplusfor"]);

Route::get("/php", [HomeController::class,"php"]);
Route::get("/pintro", [HomeController::class,"pintro"]);
Route::get("/pdata", [HomeController::class,"pdata"]);
Route::get("/plist", [HomeController::class,"plist"]);
Route::get("/psyntax", [HomeController::class,"psyntax"]);
Route::get("/pvariables", [HomeController::class,"pvariables"]);
Route::get("/poperators", [HomeController::class,"poperators"]);
Route::get("/pcondition", [HomeController::class,"pcondition"]);
Route::get("/pwhile", [HomeController::class,"pwhile"]);
Route::get("/pfor", [HomeController::class,"pfor"]);