Route::any('/profile', function (Request $request) {
    $request->user()->forceFill($request->all())->save();

    $user = $request->user()->fresh();

    return response()->json(compact('user'));
})->middleware('auth');

