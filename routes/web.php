<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Models\Category;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.page');


Route::get('/library-management', [LibraryController::class, 'dashboard'])
    ->name('library_management');

Route::get('/project2/calculator', [ProjectController::class, 'Calculator'])
    ->name('project2.calculator');

Route::get('/project3/review-rating', [ProjectController::class, 'reviewRating'])
    ->name('project3.review-rating');


    
//ADD BOOK AND STORE BOOK 
Route::get('/add-book', [LibraryController::class, 'addBook'])->name('add.book');

Route::post('/store-book', [LibraryController::class, 'storeBook'])->name('books.store');



//BOOKLIST
Route::get('/book-list', [LibraryController::class, 'bookList'])->name('book.list');




//MEMBER VIEW AND STORE 
Route::get('/member', [LibraryController::class, 'memberPage'])->name('member.page');

Route::post('/store-member', [LibraryController::class, 'storeMember'])->name('member.store');
 

// MEMBER EDIT
Route::get('/edit-member/{id}', [LibraryController::class, 'editMember'])->name('member.edit');
Route::post('/update-member/{id}', [LibraryController::class, 'updateMember'])->name('member.update');

// MEMBER DELETE
Route::get('/delete-member/{id}', [LibraryController::class, 'deleteMember'])->name('member.delete');




//issue return routes //
Route::get('/issue-book', [LibraryController::class, 'issueBook'])->name('issue.book');

Route::post('/issue-book/store', [LibraryController::class, 'storeIssue'])->name('issue.store');

Route::get('/issue-book/{id}', [LibraryController::class, 'showIssue'])->name('issue.show');

Route::get('/issue-book/{id}/edit', [LibraryController::class, 'editIssue'])->name('issue.edit');

Route::post('/issue-book/{id}/update', [LibraryController::class, 'updateIssue'])->name('issue.update');

Route::delete('/issue-book/{id}/delete', [LibraryController::class, 'deleteIssue'])->name('issue.delete');

Route::get('/issued-books', [LibraryController::class, 'issuedBooksPage'])->name('issued.books');


Route::get('/return-book', [LibraryController::class, 'returnBook'])->name('return.book');

Route::post('/return-book/update', [LibraryController::class, 'updateReturn']) ->name('return.update');


//category routes//
Route::get('/category', [LibraryController::class, 'categoryPage'])->name('category.page');

Route::post('/store-category', [LibraryController::class, 'storeCategory'])->name('category.store');


Route::get('/category/{id}/edit', [LibraryController::class, 'editCategory'])->name('category.edit');

Route::post('/category/{id}/update', [LibraryController::class, 'updateCategory'])->name('category.update');