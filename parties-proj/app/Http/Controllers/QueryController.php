<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Purpose;
use Illuminate\Auth\Recaller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class QueryController extends Controller
{
    public function index()
    {
        return view('queries/index');
    }

    // inner_join_1
    public function inner_join_1()
    {
        $cities = City::all();

        return view('queries/each/inner-join-1', [
            'cities' => $cities
        ]);
    }

    public function inner_join_1_post(Request $request)
    {
        $result = DB::select("SELECT departments.number AS\"Номер штаба\", cities.title AS\"город\"FROM departments INNER JOIN cities ON departments.city_id = cities.id where cities.id = '$request->city'");

        return view('queries/show', [
            'query' => "Вывод всех штабов которые находиться в '$request->city' городе",
            'result' => $result
        ]);
    }

    // inner_join_2
    public function inner_join_2()
    {
        $cities = City::all();

        return view('queries/each/inner-join-2', [
            'cities' => $cities
        ]);
    }

    public function inner_join_2_post(Request $request)
    {
        $result = DB::select("SELECT organisations.title AS\"Название организации\", departments.number AS\"Номер штаба\", cities.title AS\"Город\"FROM organisations INNER JOIN departments ON departments.organisation_id = organisations.id INNER JOIN cities ON departments.city_id = cities.id WHERE cities.id = '$request->city'");

        return view('queries/show', [
            'query' => "Вывод всех организаций которые находяться в '$request->city' городе",
            'result' => $result
        ]);
    }

    // inner_join_3
    public function inner_join_3()
    {
        $date = date("Y-m-d");
        return view('queries/each/inner-join-3', [
            'date' => $date
        ]);
    }
    public function inner_join_3_post(Request $request)
    {
        $result = DB::select("SELECT o.title\"Название организации\", d.title\"Название акции\", d.count_m\"количество людей\", d.event_date\"дата проведения\"FROM discounts d INNER JOIN organisations o ON d.organisation_id = o.id WHERE d.event_date ='$request->date'");

        return view('queries/show', [
            'query' => "Вывод всех организаций которые провели акции '$request->date' дате",
            'result' => $result
        ]);
    }

    // inner_join_4
    public function inner_join_4()
    {
        $date1 = date("Y-m-d");
        $date2 = date("Y-m-d");
        $purpose = Purpose::all();
        return view('queries/each/inner-join-4', [
            'date1' => $date1,
            'date2' => $date1,
            'purposes' => $purpose
        ]);
    }

    public function inner_join_4_post(Request $request)
    {
        
        $result = DB::select("SELECT d.title\"Название документа\", d.since_date\"Дата утверждения\", p.title\"Направленность\"FROM documents d INNER JOIN purposes p ON purpose_id = p.id WHERE p.id ='$request->purpose'and d.since_date BETWEEN '$request->date1' AND '$request->date2' ORDER BY d.since_date");

        return view('queries/show', [
            'query' => "Вывод всех документов которые соответствуют '$request->purpose' направлености и были опубликованы с '$request->date1' года по '$request->date2'",
            'result' => $result
        ]);
    }

    // inner_join_5
    public function inner_join_5()
    {
    $result = DB::select("SELECT o.title\"Назввание организации\", l.title\"Тип организации\", d.title\"Название документа\", p.title\"Тип документа\"FROM organisations o INNER JOIN documents d ON d.organisation_id = o.id INNER JOIN legals l ON o.legal_id = l.id INNER JOIN purposes p ON d.purpose_id = p.id ORDER BY l.title");

        return view('queries/show', [
            'query' => 'Организации их тип и документы выпущеные ими и их направленость',
            'result' => $result
        ]);
    }

    // inner_join_6
    public function inner_join_6()
    {
        $result = DB::select("SELECT d.number\"Номер штаба\", c.title\"Город\", m.name\"Представители\"FROM departments d INNER JOIN cities c ON d.city_id = c.id INNER JOIN department_member dm ON dm.department_id = d.id INNER JOIN members m ON dm.member_id = m.id");

        return view('queries/show', [
            'query' => 'Штаб, город и представители',
            'result' => $result
        ]);
    }

    // inner_join_7
    public function inner_join_7()
    {
        $result = DB::select("SELECT o.title\"Назввание организации\", d.title\"Название акции\", t.title\"Тип акции\"FROM organisations o INNER JOIN discounts d ON d.organisation_id = o.id INNER JOIN types t ON d.type_id = t.id ORDER BY o.title");

        return view('queries/show', [
            'query' => 'Организация, Акция, Типы акции',
            'result' => $result
        ]);
    }

    // left_join
    public function left_join()
    {
        $result = DB::select("SELECT t.title\"тип\", d.title\"акция\"FROM types t LEFT JOIN discounts d ON d.type_id = t.id ORDER BY t.title");

        return view('queries/show', [
            'query' => 'Выводит все типы акций вне зависимости от того была ли проведена хотя бы одна акция такого типа',
            'result' => $result
        ]);
    }

    // right_join
    public function right_join()
    {
        $result = DB::select("SELECT o.title\"Название организации\", d.title\"Название акции\", d.money\"сумма\", d.count_m\"количество людей\", d.event_date\"дата проведения\"FROM discounts d RIGHT JOIN organisations o ON d.organisation_id = o.id WHERE d.title is null");

        return view('queries/show', [
            'query' => 'Выводит все организации которые не проводили акции',
            'result' => $result
        ]);
    }

    // select_in_select
    public function select_in_select()
    {
        $result = DB::select("SELECT corgi\"организация\", cdoc\"документ\", cpurpose\"направленность\", cdate\"дата релиза\"FROM ( SELECT o.title corgi, d.title cdoc, p.title cpurpose, d.since_date cdate FROM documents d JOIN organisations o ON d.organisation_id = o.id JOIN purposes p ON d.purpose_id = p.id ) AS sub WHERE cdate BETWEEN'2020-01-28'AND'2020-01-29'");

        return view('queries/show', [
            'query' => 'организации, цели документов и документы, которые были опубликованы в такой-то промежуток времени',
            'result' => $result
        ]);
    }

    // aggregate_no_condition
    public function aggregate_no_condition()
    {
        $result = DB::select(" SELECT o.title\"организация\", COUNT(d.title)\"количество\" FROM documents d JOIN organisations o ON d.organisation_id = o.id GROUP BY o.title ORDER BY o.title");

        return view('queries/show', [
            'query' => 'Общее количество документов у каждой организации',
            'result' => $result
        ]);
    }

    // aggregate_condition_data
    public function aggregate_condition_data()
    {
        $purpose = Purpose::all();

        return view('queries/each/aggregate-condition-data', [
            'purposes' => $purpose
        ]);
    }

    public function aggregate_condition_data_post(Request $request)
    {
        $result = DB::select("SELECT o.title\"организация\", COUNT(d.title) \"количество\", p.title\"направленность\" FROM documents d JOIN organisations o ON d.organisation_id = o.id JOIN purposes p ON d.purpose_id = p.id WHERE p.id = '$request->purpose' GROUP BY o.title, p.title ORDER BY \"количество\" asc, o.title");

        return view('queries/show', [
            'query' => "Количество документов организаций одного типа направленности = '$request->purpose'",
            'result' => $result
        ]);
    }

    // aggregate_condition_group
    public function aggregate_condition_group()
    {
        $result = DB::select("SELECT o.title\"организация\", p.title\"направленность\", COUNT(d.title)\"количество\"FROM documents d JOIN organisations o ON d.organisation_id = o.id JOIN purposes p ON d.purpose_id = p.id GROUP BY o.title, p.title ORDER BY o.title, p.title,\"количество\"ASC");

        return view('queries/show', [
            'query' => 'Количество документов определённой направленности, опубликованые организациями',
            'result' => $result
        ]);
    }

    // aggregate_condition_both
    public function aggregate_condition_both()
    {
        $purpose = Purpose::all();

        return view('queries/each/aggregate-condition-both', [
            'purposes' => $purpose
        ]);
    }

    public function aggregate_condition_both_post(Request $request)
    {
        $result = DB::select("SELECT o.title\"организация\", p.title\"направленность\", COUNT(d.title)\"количество\"FROM documents d JOIN organisations o ON d.organisation_id = o.id JOIN purposes p ON d.purpose_id = p.id WHERE p.id = '$request->purpose' GROUP BY o.title, p.title ORDER BY o.title, p.title,\"количество\"ASC");

        return view('queries/show', [
            'query' => 'Объединение второго и третьего запроса',
            'result' => $result
        ]);
    }

    // aggregate_mishmash
    public function aggregate_mishmash()
    {
        $date1 = date("Y-m-d");
        $date2 = date("Y-m-d");
        return view('queries/each/aggregate_mishmash', [
            'date1' => $date1,
            'date2' => $date2
        ]);
    }

    public function aggregate_mishmash_post(Request $request)
    {
        $result = DB::select("SELECT corgi\"организация\", cdoc\"документ\", cpurpose\"направленность\", cdate\"дата релиза\"FROM ( SELECT o.title corgi, d.title cdoc, p.title cpurpose, d.since_date cdate FROM documents d JOIN organisations o ON d.organisation_id = o.id JOIN purposes p ON d.purpose_id = p.id ) AS sub WHERE cdate BETWEEN'$request->date1'AND'$request->date2'");

        return view('queries/show', [
            'query' => "организации, цели документов и документы, которые были опубликованы c '$request->date1' по '$request->date2'",
            'result' => $result
        ]);
    }

    // aggregate_subquery
    public function aggregate_subquery()
    {
        $org = str();
        return view('queries/each/aggregate_subquery', [
            'org' => $org
        ]);
    }

    public function aggregate_subquery_post(Request $request)
    {
        $result = DB::select("SELECT ctit\"Организация\", cum\"Номер штаб\", COUNT(name)\"Кол-во люд\"FROM ( SELECT o.title ctit, d.number cum, (m.surname || m.name || m.patronym) name FROM departments d JOIN department_member dm ON dm.department_id = d.id JOIN members m ON dm.member_id = m.id JOIN organisations o ON d.organisation_id = o.id ORDER BY d.number ) AS sub WHERE sub.ctit LIKE'%$request->org%'GROUP BY ctit,cum ORDER BY ctit, cum,\"Кол-во люд\"ASC");

        return view('queries/show', [
            'query' => "по количеству участников определяем сколько у организации, которая содержит в названии '$request->org', штабов",
            'result' => $result
        ]);
    }
   
}
