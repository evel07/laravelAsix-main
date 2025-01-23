<?php namespace App\Http\Controllers;

use App\Models\Zenless;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ZenlessController extends Controller
{
    public function index(): View {
        $zenless = Zenless::all();
        return view('Zenless.index', compact('zenless'));
    }

    public function create(): View {
        return view('Zenless.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'abilities' => 'required',
            'age' => 'required',
            'role' => 'required'
        ]);

        Zenless::create($request->all());

        return redirect()->route('Zenless.index');
    }

    public function edit(Zenless $zenless): View {
        return view('Zenless.edit', compact('zenless'));
    }

    public function update(Request $request, Zenless $zenless): RedirectResponse {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'abilities' => 'required',
            'age' => 'required',
            'role' => 'required'
        ]);

        $zenless->update($request->all());

        return redirect()->route('Zenless.index');
    }

    public function delete(Zenless $zenless): View {
        return view('Zenless.delete', compact('zenless'));
    }

    public function destroy(Zenless $zenless): RedirectResponse {
        $zenless->delete();
        return redirect()->route('Zenless.index');
    }

    public function show(Zenless $zenless): View {
        return view('Zenless.show', compact('zenless'));
    }

}
