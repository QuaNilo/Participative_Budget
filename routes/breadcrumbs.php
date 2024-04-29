<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('Home'), route('dashboard'), ['isHome' => true]);
});
Breadcrumbs::for('home-frontend', function (BreadcrumbTrail $trail) {
    $trail->push(__('Home'), route('home'), ['isHome' => true]);
});

// Home > User
Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Users'), route('users.index'));
});
Breadcrumbs::for('users.create', function (BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push(__('Create'), route('users.create'));
});
Breadcrumbs::for('users.show', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users.index');
    $trail->push($user->name, route('users.show', $user));
});
Breadcrumbs::for('users.edit', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users.show', $user);
    $trail->push(__('Update'), route('users.edit', $user));
});
Breadcrumbs::for('profile.show', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('home');
    $trail->push($user->name, route('profile.show'));
});
Breadcrumbs::for('users.own_edit', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users.own_show', $user);
    $trail->push(__('Update'), route('users.edit', $user));
});

Breadcrumbs::for('api-tokens.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('API Tokens'), route('api-tokens.index'));
});


// Home > Role
Breadcrumbs::for('roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Roles'), route('roles.index'));
});
Breadcrumbs::for('roles.create', function (BreadcrumbTrail $trail) {
    $trail->parent('roles.index');
    $trail->push(__('Create'), route('roles.create'));
});
Breadcrumbs::for('roles.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('roles.index');
    $trail->push($model->name, route('roles.show', $model));
});
Breadcrumbs::for('roles.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('roles.show', $model);
    $trail->push(__('Update'), route('roles.edit', $model));
});

// Home > Settings
Breadcrumbs::for('settings.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Settings'), route('settings.index'));
});
Breadcrumbs::for('settings.create', function (BreadcrumbTrail $trail) {
    $trail->parent('settings.index');
    $trail->push(__('Create'), route('settings.create'));
});
Breadcrumbs::for('settings.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('settings.index');
    $trail->push('1', route('settings.show', $model));
});
Breadcrumbs::for('settings.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('settings.show', $model);
    $trail->push(__('Update'), route('settings.edit', $model));
});

// Home > Permissions
Breadcrumbs::for('permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Permissions'), route('permissions.index'));
});
Breadcrumbs::for('permissions.create', function (BreadcrumbTrail $trail) {
    $trail->parent('permissions.index');
    $trail->push(__('Create'), route('permissions.create'));
});
Breadcrumbs::for('permissions.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('permissions.index');
    $trail->push($model->name, route('permissions.show', $model));
});
Breadcrumbs::for('permissions.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('permissions.show', $model);
    $trail->push(__('Update'), route('permissions.edit', $model));
});

// Home > Demo
Breadcrumbs::for('demos.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Demos'), route('demos.index'));
});
Breadcrumbs::for('demos.create', function (BreadcrumbTrail $trail) {
    $trail->parent('demos.index');
    $trail->push(__('Create'), route('demos.create'));
});
Breadcrumbs::for('demos.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('demos.index');
    $trail->push($model->name, route('demos.show', $model));
});
Breadcrumbs::for('demos.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('demos.show', $model);
    $trail->push(__('Update'), route('demos.edit', $model));
});

// Home > Proposals
Breadcrumbs::for('proposals.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Proposals'), route('proposals.index'));
});
Breadcrumbs::for('proposals.create', function (BreadcrumbTrail $trail) {
    $trail->parent('proposals.index');
    $trail->push(__('Create'), route('proposals.create'));
});
Breadcrumbs::for('proposals.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('proposals.index');
    $trail->push($model->title, route('proposals.show', $model));
});
Breadcrumbs::for('proposals.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('proposals.show', $model);
    $trail->push(__('Update'), route('proposals.edit', $model));
});


// Home > Categories
Breadcrumbs::for('categories.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Categories'), route('categories.index'));
});
Breadcrumbs::for('categories.create', function (BreadcrumbTrail $trail) {
    $trail->parent('categories.index');
    $trail->push(__('Create'), route('categories.create'));
});
Breadcrumbs::for('categories.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('categories.index');
    $trail->push($model->name, route('categories.show', $model));
});
Breadcrumbs::for('categories.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('categories.show', $model);
    $trail->push(__('Update'), route('categories.edit', $model));
});


// Home > Votes
Breadcrumbs::for('votes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Votes'), route('votes.index'));
});
Breadcrumbs::for('votes.create', function (BreadcrumbTrail $trail) {
    $trail->parent('votes.index');
    $trail->push(__('Create'), route('votes.create'));
});
Breadcrumbs::for('votes.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('votes.index');
    $trail->push($model->id, route('votes.show', $model));
});
Breadcrumbs::for('votes.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('votes.show', $model);
    $trail->push(__('Update'), route('votes.edit', $model));
});


// Home > Editions
Breadcrumbs::for('editions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Editions'), route('editions.index'));
});
Breadcrumbs::for('editions.create', function (BreadcrumbTrail $trail) {
    $trail->parent('editions.index');
    $trail->push(__('Create'), route('editions.create'));
});
Breadcrumbs::for('editions.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('editions.index');
    $trail->push('Edição' .$model->identifier, route('editions.show', $model));
});
Breadcrumbs::for('editions.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('editions.show', $model);
    $trail->push(__('Update'), route('editions.edit', $model));
});


// Home > Calendar
Breadcrumbs::for('calendar-dynamics.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Calendars'), route('calendar-dynamics.index'));
});
Breadcrumbs::for('calendar-dynamics.create', function (BreadcrumbTrail $trail) {
    $trail->parent('calendar-dynamics.index');
    $trail->push(__('Create'), route('calendar-dynamics.create'));
});
Breadcrumbs::for('calendar-dynamics.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('calendar-dynamics.index');
    $trail->push('Edição' .$model->phase, route('calendar-dynamics.show', $model));
});
Breadcrumbs::for('calendar-dynamics.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('calendar-dynamics.show', $model);
    $trail->push(__('Update'), route('calendar-dynamics.edit', $model));
});



// Home > Citizens
Breadcrumbs::for('citizens.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Citizens'), route('citizens.index'));
});
Breadcrumbs::for('citizens.create', function (BreadcrumbTrail $trail) {
    $trail->parent('citizens.index');
    $trail->push(__('Create'), route('citizens.create'));
});
Breadcrumbs::for('citizens.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('citizens.index');
    $trail->push($model->user->name, route('citizens.show', $model));
});
Breadcrumbs::for('citizens.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('citizens.show', $model);
    $trail->push(__('Update'), route('citizens.edit', $model));
});


// Home > Regulations
Breadcrumbs::for('regulations.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Regulations'), route('regulations.index'));
});
Breadcrumbs::for('regulations.create', function (BreadcrumbTrail $trail) {
    $trail->parent('regulations.index');
    $trail->push(__('Create'), route('regulations.create'));
});
Breadcrumbs::for('regulations.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('regulations.index');
    $trail->push('Edição' .$model->phase, route('regulations.show', $model));
});
Breadcrumbs::for('regulations.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('regulations.show', $model);
    $trail->push(__('Update'), route('regulations.edit', $model));
});


// Home > Chapters
Breadcrumbs::for('chapters.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Chapters'), route('chapters.index'));
});
Breadcrumbs::for('chapters.create', function (BreadcrumbTrail $trail) {
    $trail->parent('chapters.index');
    $trail->push(__('Create'), route('chapters.create'));
});
Breadcrumbs::for('chapters.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('chapters.index');
    $trail->push('Chapter' .$model->title, route('chapters.show', $model));
});
Breadcrumbs::for('chapters.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('chapters.show', $model);
    $trail->push(__('Update'), route('chapters.edit', $model));
});



// Home > FAQS
Breadcrumbs::for('faqs.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('FAQ'), route('faqs.index'));
});
Breadcrumbs::for('faqs.create', function (BreadcrumbTrail $trail) {
    $trail->parent('faqs.index');
    $trail->push(__('Create'), route('faqs.create'));
});
Breadcrumbs::for('faqs.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('faqs.index');
    $trail->push('FAQ' .$model->question, route('faqs.show', $model));
});
Breadcrumbs::for('faqs.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('faqs.show', $model);
    $trail->push(__('Update'), route('faqs.edit', $model));
});



// Home > FAQS-Themes
Breadcrumbs::for('faq-themes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('FAQ Theme'), route('faqs.index'));
});
Breadcrumbs::for('faq-themes.create', function (BreadcrumbTrail $trail) {
    $trail->parent('faq-themes.index');
    $trail->push(__('Create'), route('faq-themes.create'));
});
Breadcrumbs::for('faq-themes.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('faq-themes.index');
    $trail->push('FAQ Theme' .$model->question, route('faq-themes.show', $model));
});
Breadcrumbs::for('faq-themes.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('faq-themes.show', $model);
    $trail->push(__('Update'), route('faq-themes.edit', $model));
});



// Home > Home Settings
Breadcrumbs::for('homes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Home Page'), route('homes.index'));
});
Breadcrumbs::for('homes.create', function (BreadcrumbTrail $trail) {
    $trail->parent('homes.index');
    $trail->push(__('Create'), route('homes.create'));
});
Breadcrumbs::for('homes.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('homes.index');
    $trail->push('Home Page' .$model->question, route('homes.show', $model));
});
Breadcrumbs::for('homes.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('homes.show', $model);
    $trail->push(__('Update'), route('homes.edit', $model));
});


// Home-info > FAQS
Breadcrumbs::for('home-infos.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Home Page'), route('home-infos.index'));
});
Breadcrumbs::for('home-infos.create', function (BreadcrumbTrail $trail) {
    $trail->parent('home-infos.index');
    $trail->push(__('Create'), route('home-infos.create'));
});
Breadcrumbs::for('home-infos.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('home-infos.index');
    $trail->push('Home Page' .$model->question, route('home-infos.show', $model));
});
Breadcrumbs::for('home-infos.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('home-infos.show', $model);
    $trail->push(__('Update'), route('home-infos.edit', $model));
});


// Home-bullet-points > FAQS
Breadcrumbs::for('home-bullet-points.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Home Page'), route('home-bullet-points.index'));
});
Breadcrumbs::for('home-bullet-points.create', function (BreadcrumbTrail $trail) {
    $trail->parent('home-bullet-points.index');
    $trail->push(__('Create'), route('home-bullet-points.create'));
});
Breadcrumbs::for('home-bullet-points.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('home-bullet-points.index');
    $trail->push('Home Page' . $model->question, route('home-bullet-points.show', $model));
});
Breadcrumbs::for('home-bullet-points.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('home-bullet-points.show', $model);
    $trail->push(__('Update'), route('home-bullet-points.edit', $model));
});


// Home > Article
Breadcrumbs::for('articles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Article'), route('articles.index'));
});
Breadcrumbs::for('articles.create', function (BreadcrumbTrail $trail) {
    $trail->parent('articles.index');
    $trail->push(__('Create'), route('articles.create'));
});
Breadcrumbs::for('articles.show', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('articles.index');
    $trail->push('Chapter' .$model->title, route('articles.show', $model));
});
Breadcrumbs::for('articles.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->parent('articles.show', $model);
    $trail->push(__('Update'), route('articles.edit', $model));
});

/*
// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});*/
