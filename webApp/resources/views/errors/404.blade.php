@extends('layouts.error', [
    'pageTitle' => '404 Not Found',
    'errorCode' => '404',
    'errorIdentity' => 'Page Not Found',
    'errorDescription' => "The server couldn't find the webpage or resource you requested."
])