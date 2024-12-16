<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request()->search;

        return view('dashboard', [
            'events' => Event::query()
                ->where(function(Builder $query) use($search){
                    $query->where('name', 'like', "%$search%")
                    ->orWhere('localization', 'like', "%$search%");
                })->orderBy('created_at', 'desc')
                ->paginate(7)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>['required', ],
            'capacity' =>['required', 'integer'],
            'datetime' =>['required', 'date'],
            'localization' =>['required', 'min:3', 'max:255'],
            'description' =>['required', 'min:10'],
        ]);

        Event::create(array_merge($data, [
            'user_id' => auth()->user()->id,
        ]));

        return to_route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $dateFormat = Carbon::parse($event->datetime)->format('d/m/y - H:i');
        $numberFormat = number_format($event->capacity, 0, ',', '.');
        $event->datetime = $dateFormat;
        $event->capacity = $numberFormat;

        return view('events.show', [
            'event' => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
