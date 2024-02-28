<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Module;

class HomeController extends Controller
{
    public function home()
    {
        return view("user.home");
    }

    public function index()  {
        if (Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == '0'){
                return view("user.home");
            }elseif ($usertype == '1') {
                return view('admin.admin');
            }else {
                return redirect()->back();
            }
        }
    }

    public function showcourse() {
        $data = Module::all();
        return view ('admin.courselist', compact('data'));
    }

    public function addcourse()  {
        return view ('admin.createmodule');
    }
    
    public function createcourse(Request $request) {
        $data = new Module();
        $data->modulename = $request->name;
        

        $image = $request->image;
        if ($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('module',$imagename);
            $data->moduleimage=$imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function deletecourse($id){
        $module=module::find($id);
        $module->delete();
        return redirect()->back()->with('message', 'Module Deleted Successfully');
    }
    

    public function coursemod()
    {
        return view("user.coursemod");
    }
    public function compfunda()
    {
        return view("user.compfunda");
    }
    public function labenv()
    {
        return view("user.labenv");
    }
    public function dsa()
    {
        return view("user.dsa");
    }
    public function python()
    {
        return view("user.python");
    }
    public function intro()
    {
        return view("user.intro");
    }
    public function data()
    {
        return view("user.data");
    }
    public function list()
    {
        return view("user.list");
    }
    public function syntax()
    {
        return view("user.syntax");
    }
    public function variables()
    {
        return view("user.variables");
    }
    public function operators()
    {
        return view("user.operators");
    }
    public function condition()
    {
        return view("user.condition");
    }
    public function while()
    {
        return view("user.while");
    }
    public function for()
    {
        return view("user.for");
    }
    public function java()
    {
        return view("user.java");
    }
    public function jintro()
    {
        return view("user.jintro");
    }
    public function jdata()
    {
        return view("user.jdata");
    }
    public function jlist()
    {
        return view("user.jlist");
    }
    public function jsyntax()
    {
        return view("user.jsyntax");
    }
    public function jvariables()
    {
        return view("user.jvariables");
    }
    public function joperators()
    {
        return view("user.joperators");
    }
    public function jcondition()
    {
        return view("user.jcondition");
    }
    public function jwhile()
    {
        return view("user.jwhile");
    }
    public function jfor()
    {
        return view("user.jfor");
    }
    public function kotlin()
    {
        return view("user.kotlin");
    }
    public function kintro()
    {
        return view("user.kintro");
    }
    public function kdata()
    {
        return view("user.kdata");
    }
    public function klist()
    {
        return view("user.klist");
    }
    public function ksyntax()
    {
        return view("user.ksyntax");
    }
    public function kvariables()
    {
        return view("user.kvariables");
    }
    public function koperators()
    {
        return view("user.koperators");
    }
    public function kcondition()
    {
        return view("user.kcondition");
    }
    public function kwhile()
    {
        return view("user.kwhile");
    }
    public function kfor()
    {
        return view("user.kfor");
    }
    public function javascript()
    {
        return view("user.javascript");
    }
    public function jsintro()
    {
        return view("user.jsintro");
    }
    public function jsdata()
    {
        return view("user.jsdata");
    }
    public function jslist()
    {
        return view("user.jslist");
    }
    public function jssyntax()
    {
        return view("user.jssyntax");
    }
    public function jsvariables()
    {
        return view("user.jsvariables");
    }
    public function jsoperators()
    {
        return view("user.jsoperators");
    }
    public function jscondition()
    {
        return view("user.jscondition");
    }
    public function jswhile()
    {
        return view("user.jswhile");
    }
    public function jsfor()
    {
        return view("user.jsfor");
    }
    public function html()
    {
        return view("user.html");
    }
    public function hintro()
    {
        return view("user.hintro");
    }
    public function hbasic()
    {
        return view("user.hbasic");
    }
    public function helements()
    {
        return view("user.helements");
    }
    public function hattributes()
    {
        return view("user.hattributes");
    }
    public function hheadings()
    {
        return view("user.hheadings");
    }
    public function hparagraphs()
    {
        return view("user.hparagraphs");
    }
    public function hstyles()
    {
        return view("user.hstyles");
    }
    public function hlists()
    {
        return view("user.hlists");
    }
    public function css()
    {
        return view("user.css");
    }
    public function cintro()
    {
        return view("user.cintro");
    }
    public function csyntax()
    {
        return view("user.csyntax");
    }
    public function chow()
    {
        return view("user.chow");
    }
    public function ccolors()
    {
        return view("user.ccolors");
    }
    public function cborder()
    {
        return view("user.cborder");
    }
    public function cmargin()
    {
        return view("user.cmargin");
    }
    public function cpadding()
    {
        return view("user.cpadding");
    }
    public function chw()
    {
        return view("user.chw");
    }
    public function cp()
    {
        return view("user.cp");
    }
    public function cpintro()
    {
        return view("user.cpintro");
    }
    public function cpdata()
    {
        return view("user.cpdata");
    }
    public function cplist()
    {
        return view("user.cplist");
    }
    public function cpsyntax()
    {
        return view("user.cpsyntax");
    }
    public function cpvariables()
    {
        return view("user.cpvariables");
    }
    public function cpoperators()
    {
        return view("user.cpoperators");
    }
    public function cpcondition()
    {
        return view("user.cpcondition");
    }
    public function cpwhile()
    {
        return view("user.cpwhile");
    }
    public function cpfor()
    {
        return view("user.cpfor");
    }
    public function cplus()
    {
        return view("user.cplus");
    }
    public function cplusintro()
    {
        return view("user.cplusintro");
    }
    public function cplusdata()
    {
        return view("user.cplusdata");
    }
    public function cpluslist()
    {
        return view("user.cpluslist");
    }
    public function cplussyntax()
    {
        return view("user.cplussyntax");
    }
    public function cplusvariables()
    {
        return view("user.cplusvariables");
    }
    public function cplusoperators()
    {
        return view("user.cplusoperators");
    }
    public function cpluscondition()
    {
        return view("user.cpluscondition");
    }
    public function cpluswhile()
    {
        return view("user.cpluswhile");
    }
    public function cplusfor()
    {
        return view("user.cplusfor");
    }
    public function php()
    {
        return view("user.php");
    }
    public function pintro()
    {
        return view("user.pintro");
    }
    public function pdata()
    {
        return view("user.pdata");
    }
    public function plist()
    {
        return view("user.plist");
    }
    public function psyntax()
    {
        return view("user.psyntax");
    }
    public function pvariables()
    {
        return view("user.pvariables");
    }
    public function poperators()
    {
        return view("user.poperators");
    }
    public function pcondition()
    {
        return view("user.pcondition");
    }
    public function pwhile()
    {
        return view("user.pwhile");
    }
    public function pfor()
    {
        return view("user.pfor");
    }

}

