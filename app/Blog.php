<?php

namespace App;

class Blog extends Model
{
    public function getRouteKeyName()
    {
        return 'title';
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->first();
    }

    public function subscriptions()
    {
        return $this->belongsToMany(User::class, 'subscriptions');
    }

    public function subscribed($user)
    {
        $subs = $this->subscriptions();
        return $subs->find($user->id);
    }

    public function toggleSubscription($user)
    {
        $subs = $this->subscriptions();
        if ($this->subscribed($user)) {
            return $subs->detach($user);
        } else {
            return $subs->attach($user);
        }
    }

}
