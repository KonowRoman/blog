<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Âûâîäèò ïåðå÷åíü êîììåíòàðèåâ.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Âûâîäèò ôîðìó äëÿ äîáàâëåíèÿ êîììåíòàðèÿ.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Ñîõðàíÿåò êîììåíòàðèé â ÁÄ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Âûâîäèò êîììåíòàðèé ñ óêàçàííûì èäåíòèôèêàòîðîì.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Âûâîäèò ôîðìó äëÿ ðåäàêòèðîâàíèÿ êîììåíòàðèÿ.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Îáíîâëÿåò êîììåíòàðèé â ÁÄ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Óäàëÿåò êîììåíòàðèé ïî èäåíòèôèêàòîðó.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
