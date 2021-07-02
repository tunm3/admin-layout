<?php


namespace App\Http\Controllers;


class LayoutController extends Controller
{
    public function calendar()
    {
        return view('admin.calendar');
    }

    public function form()
    {
        return view('admin.form');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function ui()
    {
        return view('admin.ui');
    }

    public function list()
    {
        return view('admin.list');
    }
}
