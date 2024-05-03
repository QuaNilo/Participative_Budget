<?php

namespace App\Http\Middleware;

use App\Models\Proposal;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TrackProposalViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $proposal_id = $request->route()->parameter('proposal_id');
        $proposal = Proposal::where('id', $proposal_id)->first();
        if(!$proposal){
            return redirect()->route('display_warning', ['message' => __('Failed to get proposal')]);
        }
        // Increment impression count
        $proposal->update(['impressions' => ++$proposal->impressions]);

        return $next($request);
    }
}
