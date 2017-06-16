<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use Khill\Lavacharts\Lavacharts;

class ChartController extends Controller
{
   public function showChart($value='')
   {

$lava = new Lavacharts; // See note below for Laravel

$reasons = $lava->DataTable();

$reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent')
        ->addRow(['Check Reviews', 5])
        ->addRow(['Watch Trailers', 2])
        ->addRow(['See Actors Other Work', 4])
        ->addRow(['Settle Argument', 89]);

$lava->PieChart('IMDB', $reasons, [
    'title'  => 'Reasons I visit IMDB',
    'is3D'   =>true,
    'slices' => [
        ['offset' => 0.1],
        ['offset' => 0.1],
        ['offset' => 0.1]
    ]   
]);
  /* 	$chart = Charts::multi('line','highcharts')
            ->title('My website users')
            ->labels(["ES","FR","UK"])
            ->values([100,200,500])
            ->elementLabel("Total users")
            ->dimensions(0,400)
            ->responsive(false);
            */
     $chart = Charts::multi('bar', 'material')
            ->title("My Cool Chart")
            ->dimensions(0, 400)
            ->template("material")
			->dataset('Element 1', [5,20,100])
            ->dataset('Element 2', [15,30,80])
            ->dataset('Element 3', [25,10,40])
            ->labels(['One', 'Two', 'Three']);

        return view('layouts.charts',['charts'=>$chart, 'reasons'=>$reasons,'lava'=>$lava]);
   }




   public function filterChart($value='')
   {

$lava = new Lavacharts; // See note below for Laravel

$reasons = $lava->DataTable();

$reasons->addStringColumn('Country')
        ->addNumberColumn('Popularity')
        ->addRow(['Germany', 25])
        ->addRow(['United States', 25])
        ->addRow(['Brazil', 40])
        ->addRow(['Canada', 10])
        ->addRow(['France', 10])
        ->addRow(['RU', 10]);



$lava1= new Lavacharts; // See note below for Laravel

      $scatter = $lava1->DataTable();

      $scatter->addStringColumn('Age')
              ->addNumberColumn('weight')
              ->addRow(['14', 25])
              ->addRow(['15', 25])
              ->addRow(['19', 40])
              ->addRow(['45', 100])
              ->addRow(['60', 110])
              ->addRow(['70', 70]);       
$array=[$scatter,$reasons];
  /*    $chart = Charts::multi('line','highcharts')
            ->title('My website users')
            ->labels(["ES","FR","UK"])
            ->values([100,200,500])
            ->elementLabel("Total users")
            ->dimensions(0,400)
            ->responsive(false);
   */
/*$collection=collect($reasons);
dd(collect($collection->get('rows'))->first());
        // */return $array;
   }


   public function ScatterChart($value='')
   {
     $lava1= new Lavacharts; // See note below for Laravel

      $scatter = $lava1->DataTable();

      $scatter->addStringColumn('Age')
              ->addNumberColumn('weight')
              ->addRow(['14', 25])
              ->addRow(['15', 25])
              ->addRow(['19', 40])
              ->addRow(['45', 100])
              ->addRow(['60', 110])
              ->addRow(['70', 70]);        
    return $scatter;
   }
}
