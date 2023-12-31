# Project #2 - Book Review

#### Commands
- composer create-project --prefer dist laravel/laravel book-review
- php artisan make:model Book -m
- php artisan make:model Review -m
- php artisan migrate
- php artisan migrate:refresh
- php artisan make:factory BookFactory --model=Book
- php artisan make:factory ReviewFactory --model=Review
- php artisan migrate:refresh --seed
- php artisan tinker
    - $book = \App\Models\Book::find(1);
    - $reviews = $book->reviews;
    - \App\Models\Book::with('reviews')->find(1);
    - $books = \App\Models\Book::with('reviews')->take(3)->get();
    - $book = \App\Models\Book::find(2);
    - $book->load('reviews');
    - $book = \App\Models\Book::find(1);
    - $review = new \App\Models\Review();
    - $review->review = 'This was fine';
    - $review->rating = 3;
    - $book->reviews()->save($review);
    - $book->reviews;
    - $book = \App\Models\Book::find(1);
    - $review = $book->reviews()->create(['review' => 'Sample review', 'rating' => 5]);
    - $review = \App\Models\Review::find(1);
    - $review->book;
    - $book2 = \App\Models\Book::find(2);
    - $book2->reviews()->save($review);
    - $review = \App\Models\Review::with('book')->find(1);
    - \App\Models\Book::where('title', 'LIKE', '%quia%')->get();
    - \App\Models\Book::title('quia')->get();
    - \App\Models\Book::title('quia')->where('created_at', '>', '2023-01-01')->get();
    - \App\Models\Book::title('quia')->where('cerated_at', '>', '2023-01-01')->toSql();
    - \App\Models\Book::withCount('reviews')->get();
    - \App\Models\Book::withCount('reviews')->latest()->limit(3)->get();
    - \App\Models\Book::limit(5)->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating')->get();
    - \App\Models\Book::limit(5)->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating')->toSql();
    - \App\Models\Book::withCount('reviews')->withAvg('reviews', 'rating')->having('reviews_count', '>=', 10)->orderBy('reviews_avg_rating', 'desc')->limit(10)->get();
    - \App\Models\Book::withCount('reviews')->withAvg('reviews', 'rating')->having('reviews_count', '>=', 10)->orderBy('reviews_avg_rating', 'desc')->limit(10)->toSql();
    - \App\Models\Book::popular()->highestRated()->get();
    

