<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/crm', 'Controller@cms_sale');
Route::get('/',  'Home@index')->name('website-home');
Route::get('/repair-maintenance',  'Home@repairMaintenance')->name('repair-maintenance');
Route::get('/CreateIssueSuccess',  'Home@CreateIssueSuccess');//->name('repair-maintenance');
Route::post('/send-repair-issue',  'Home@sendRepairIssue')->name('send-repair-issue');
// api
Route::get('/getRepairData',  'Home@getRepairData')->name('repair-data');
Route::post('/getSubCategory',  'Home@getSubCategory')->name('sub-cat');
Route::post('/calculateValuation',  'Home@calculateValuation')->name('calc-valuation');
Route::post('/postcodeLookup', 'Home@postcodeLookup')->name('postcode-lookup');
// valuation tool
Route::get('/valuation/online', 'Home@getvaluationTool')->name('valuation-tool');
Route::post('/getvaluationAddress', 'Home@getvaluationAddress')->name('valuation-tool');
Route::post('/testOnSafari', 'Home@getvaluationAddress')->name('valuation-tool');

Route::get('/property/search',  'Properties@searchResults')->name('website-property-search');
Route::get('/property/view/{property}-{slug?}',  'Properties@detailPage')->name('website-property-detail');
Route::get('/property/view',  'Properties@detailPage10')->name('website-property-detail10');
Route::get('/about-us',  'About@index')->name('website-about');
Route::get('/valuations',  'About@valuations')->name('website-valuations');
Route::get('/contact-us',  'Contact@index')->name('website-contact');
Route::get('/payments',  'Payments@index')->name('website-payments');
Route::get('/fees',  'About@fees')->name('website-fees');
Route::get('/certificates',  'About@certificate')->name('website-certificates');

Route::post('/contact/get-in-touch','Contact@getInTouch')->name('website-contactus-form');
Route::post('/fees/submit-enquiry','About@SubmitEnquiry')->name('submit-enquiry');
Route::post('/bookvaluation','Home@sendValuationMail')->name('book-valuation-mail');
Route::post('/bookhomevaluation','Home@sendHomeValuationMail')->name('book-home-valuation-mail');
Route::fallback('CustomPage@index');

Route::get('/guards-country', 'Home@country')->name('country');
Route::get('/guards-london', 'Home@london')->name('london');