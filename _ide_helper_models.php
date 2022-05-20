<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Author
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 * @property string|null $name
 * @property string|null $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $book
 * @property-read int|null $book_count
 * @method static \Illuminate\Database\Eloquent\Builder|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author query()
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereUpdatedAt($value)
 */
	class Author extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BaseModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 */
	class BaseModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 * @property string|null $isbn
 * @property string|null $title
 * @property string|null $publication_date
 * @property int|null $weight
 * @property int|null $wide
 * @property int|null $long
 * @property int|null $page
 * @property string|null $description
 * @property int|null $publisher_id
 * @property int|null $language_id
 * @property int|null $category_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Author[] $author
 * @property-read int|null $author_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BookImg[] $bookImg
 * @property-read int|null $book_img_count
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Language|null $language
 * @property-read \App\Models\Publisher|null $publisher
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereIsbn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublicationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublisherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereWide($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookAuthor
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 * @property int|null $author_id
 * @property int|null $book_id
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAuthor whereUpdatedAt($value)
 */
	class BookAuthor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookImg
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 * @property string|null $name
 * @property string|null $description
 * @property int|null $book_id
 * @property-read \App\Models\Book $book
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookImg whereUpdatedAt($value)
 */
	class BookImg extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 * @property string|null $name
 * @property string|null $description
 * @property int|null $category_parent_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $book
 * @property-read int|null $book_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $parentCategory
 * @property-read int|null $parent_category_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 * @property string|null $name
 * @property string|null $description
 * @property string|null $icon
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $book
 * @property-read int|null $book_count
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Publisher
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 * @property string|null $name
 * @property string|null $description
 * @property string|null $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $book
 * @property-read int|null $book_count
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereUpdatedAt($value)
 */
	class Publisher extends \Eloquent {}
}

