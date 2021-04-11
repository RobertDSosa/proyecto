<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ReportController;
use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;


Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::resource('groups', GroupController::class)->except('show')->names('admin.groups');

Route::get('reports/make-report', [ReportController::class, 'makeReport'])->name('admin.reports.make-report');

Route::get('reports/make-excel', [ReportController::class, 'makeExcel'])->name('admin.reports.make-excel');

Route::get('download-pdf', [ReportController::class, 'downloadPDF'])->name('admin.reports.download-pdf');

Route::resource('reports', ReportController::class )->names('admin.reports');

