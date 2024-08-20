<?php

namespace App\Search;

use App\Models\Qz;
use App\Models\User;
use App\Models\Event;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Category;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchBar
{
    public function __construct(private Request $request) {}

    public function category(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Category::with(['formations'])
            ->orderByDesc('updated_at')
            ->paginate()
            : Category::with(['formations'])
            ->orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function formation(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Formation::with(['categories'])
            ->orderByDesc('updated_at')
            ->paginate()
            : Formation::with(['categories'])
            ->orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function service(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Service::orderByDesc('updated_at')
            ->paginate()
            : Service::orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function qz(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Qz::orderByDesc('updated_at')
            ->paginate()
            : Qz::orderByDesc('updated_at')
            ->where('question', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }


    public function event(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Event::orderByDesc('updated_at')
            ->paginate()
            : Event::orderByDesc('updated_at')
            ->where('title', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('start', 'like', "%$query%")
            ->orWhere('end', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function payment(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Payment::orderByDesc('updated_at')
            ->paginate()
            : Payment::orderByDesc('updated_at')
            ->where('mobile_money', 'like', "%$query%")
            ->orWhere('number_used', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }


    public function user(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? User::orderByDesc('updated_at')
            ->paginate()
            : User::orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('role', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }
}
