<?php

namespace App\Search;

use App\Models\Qz;
use App\Models\User;
use App\Models\Event;
use App\Models\Grade;
use App\Models\Hourly;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Category;
use App\Models\Formation;
use App\Models\Secretary;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchBar
{
    public function __construct(private Request $request) {}


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


    public function hourly(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Hourly::orderByDesc('updated_at')
            ->paginate()
            : Hourly::orderByDesc('updated_at')
            ->where('day', 'like', "%$query%")
            ->orWhere('end', 'like', "%$query%")
            ->orWhere('start', 'like', "%$query%")
            ->orWhere('lock', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }


    public function secretary(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Secretary::orderByDesc('updated_at')
            ->paginate()
            : Secretary::orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('firstname', 'like', "%$query%")
            ->orWhere('sex', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function grade(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Grade::orderByDesc('updated_at')
            ->paginate()
            : Grade::orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }

    public function worker(): LengthAwarePaginator
    {
        $query = $this->request->query->get('q');

        return $query === null
            ? Secretary::orderByDesc('updated_at')
            ->paginate()
            : Secretary::orderByDesc('updated_at')
            ->where('name', 'like', "%$query%")
            ->orWhere('firstname', 'like', "%$query%")
            ->orWhere('sex', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->orWhere('created_at', 'like', "%$query%")
            ->paginate();
    }
}
