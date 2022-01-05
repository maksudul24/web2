<?php

function printableIsbn(array $book): string {
	$result = '<i>' . $book['isbn'] . '</i>';
	return $result;
}

function printableTitle(array $book): string {
	$result = '<i>' . $book['title'] . '</i>';
	return $result;
}

function printableAuthor(array $book): string {
	$result = '<i>' . $book['author'] . '</i>';
	return $result;
}

function printablePages(array $book): string {
	$result = '<i>' . $book['pages'] . '</i>';
	return $result;
}

function printableAvailable(array $book): string {
	if (!$book['available']) {
		$result = ' <b> Not available </b>';
	}
	else{
		$result = ' <b> Available </b>';
	}
	return $result;
}

function bookingBook(array &$books, string $title): bool 
{
	foreach ($books as $key => $book) {
		if ($book['title'] == $title) {
			if ($book['available']) {
				$books[$key]['available'] = false;
				return true;
			} else {
				return false;
			}
		}
	}
return false;
}