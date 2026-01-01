@extends('layouts.error', [
    'errorCode' => '500',
    'errorIdentity' => 'Internal Server Error',
    'errorDescription' => 'Oops, something went wrong. Try to refresh this page or feel free to contact us if the problem persists.'
])