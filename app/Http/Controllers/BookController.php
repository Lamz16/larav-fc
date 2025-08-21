<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'listBook' => [
                [
                    'title' => 'Harry Potter 1',
                    'price' => 75000
                ],
                [
                    'title' => 'Harry Potter 2',
                    'price' => 80000
                ],
                [
                    'title' => 'Harry Potter 3',
                    'price' => 85000
                ],
                [
                    'title' => 'Harry Potter 4',
                    'price' => 90000
                ],
                [
                    'title' => 'Harry Potter 5',
                    'price' => 95000
                ]
            ]
        ];
        return view('buku', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('detail-buku', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
