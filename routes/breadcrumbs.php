<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('index'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Blog
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('contact'));
});

// Home > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($category->name, route('category.show', $category->slug));
});

// Home > [Category] > [Prpduct]
Breadcrumbs::register('product', function($breadcrumbs, $product)
{
    $breadcrumbs->parent('category', $product->category);
    $breadcrumbs->push($product->name, route('product.show', $category->slug, $product->slug));
});