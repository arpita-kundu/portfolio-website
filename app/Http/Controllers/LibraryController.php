<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Member;
use App\Models\IssuedBook;
use App\Models\Category;

class LibraryController extends Controller
{
    // Dashboard page
    public function dashboard()
    {
        $totalBooks = Book::count();
        $totalMembers = Member::count();
        $issuedBooks = IssuedBook::count();
        $overdueBooks = IssuedBook::where('status', 'overdue')->count();

        $recentIssued = IssuedBook::latest()->take(5)->get();

        return view('project1.library_management', compact(
            'totalBooks',
            'totalMembers',
            'issuedBooks',
            'overdueBooks',
            'recentIssued'
        ));
    }

    // Add Book page
    public function addBook()
    {
     $categories = Category::all();

     return view('project1.add-book', compact('categories'));
    }


    // Store Book in database//
    public function storeBook(Request $request)
    {
        Book::create([
         'title' => $request->title,
         'author' => $request->author,
         'category_id' => $request->category_id,
         'quantity' => $request->quantity,
          ]);

        return redirect()->route('add.book')
                         ->with('success', 'Book added successfully');
    }

    public function bookList()
    {
         $books = Book::with('category')->get();

        return view('project1.book-list', compact('books'));
    }    

    //MEMBER CONTROLLER//

     public function memberPage()
    {
        $members = Member::all();

         return view('project1.members', compact('members'));
    }

     public function storeMember(Request $request)
    {
         Member::create([
       'name' => $request->name,
       'email' => $request->email,
       'phone' => $request->phone,
        ]);
    return redirect()->route('member.page')
                     ->with('success', 'Member added successfully');
    }

   

     public function editMember($id)
    {
    $member = Member::findOrFail($id);
    $members = Member::all();

    return view('project1.members', compact('member', 'members'));
     }

    public function updateMember(Request $request, $id)
    {
    $member = Member::findOrFail($id);

    $member->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
    ]);

    return redirect()->route('member.page')
                     ->with('success', 'Member updated successfully');
    }

     public function deleteMember($id)
    {
    $member = Member::findOrFail($id);
    $member->delete();

    return redirect()->route('member.page')
                     ->with('success', 'Member deleted successfully');
    }

    //ISSUE-BOOK CONTROLLER//
     public function issueBook()
    {
       $books = Book::all();
       $members = Member::all();
       $issuedBooks = IssuedBook::with('book','member')->latest()->get();

        return view('project1.issue-book', compact(
        'books',
        'members',
        'issuedBooks'
         ));
    }

    //ISSUED-BOOK CONTROLLER//
    public function issuedBooksPage()
      {
         $issuedBooks = IssuedBook::with('book', 'member')->get();

         return view('project1.issued-books', compact('issuedBooks'));
     }

   public function storeIssue(Request $request)
      {
        IssuedBook::create([
        'book_id' => $request->book_id,
        'member_id' => $request->member_id,
        'issue_date' => $request->issue_date,
        'due_date' => $request->due_date,
        'return_date' => null,
        'status' => 'issued'
    ]);

         return redirect()->route('issued.books')
                     ->with('success', 'Book issued successfully');
    }
     
    
    public function returnBook()
    { 
       $issuedBooks = IssuedBook::with('book', 'member')->get();
        $members = Member::all();

    return view('project1.return-book', compact('issuedBooks', 'members'));
    }
    public function updateReturn(Request $request)
    {
         $issuedBook = IssuedBook::where('book_id', $request->book_id)
         ->where('member_id', $request->member_id)
         ->whereNull('return_date')
         ->first();

         if ($issuedBook) {
          $issuedBook->return_date = $request->return_date;
          $issuedBook->status = 'returned';
          $issuedBook->save();
           }

    return redirect()->route('issued.books');
    } 

    public function deleteIssue($id)
    {
           $issuedBook = IssuedBook::findOrFail($id);

          $issuedBook->delete();
 
    return redirect()->route('issued.books')
                     ->with('success', 'Issued book record deleted successfully.');
    }
    

    //CATEGORY CONTROLLER//
     public function categoryPage()
    {
    $categories = Category::all();

    return view('project1.category', compact('categories'));
    }

     public function storeCategory(Request $request)
    {
    Category::create([
        'name' => $request->name
    ]);

      return redirect()->route('category.page')
                     ->with('success', 'Category added successfully');
    }

     public function editCategory($id)
    {
          $category = Category::findOrFail($id);
          return view('project1.edit-category', compact('category'));
    }

      public function updateCategory(Request $request, $id)
    {
          $category = Category::findOrFail($id);
         $category->name = $request->name;
          $category->save();

      return redirect()->back()->with('success', 'Category updated successfully');
     }

     
}