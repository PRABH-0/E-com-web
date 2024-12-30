<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([[
            'name'=>'Oppo Mobile',
            'price'=>'20000',
            'discription'=>'A smartphone with high ram storage',
            'category'=>'mobile',
            // 'gallery'=>'https://www.google.com/imgres?q=oppomobile&imgurl=https%3A%2F%2Fopsg-img-cdn-gl.heytapimg.com%2Fepb%2F202407%2F25%2FCxzQzFb5VTKGtlT7.png&imgrefurl=https%3A%2F%2Fwww.oppo.com%2Fin%2Fsmartphones%2F&docid=LK-QTMI9JslZFM&tbnid=q_awRYMIxNFdaM&vet=12ahUKEwi0kpaZ6bqKAxX6wzgGHRQMHaEQM3oECGYQAA..i&w=1281&h=1280&hcb=2&itg=1&ved=2ahUKEwi0kpaZ6bqKAxX6wzgGHRQMHaEQM3oECGYQAA',
            'gallery'=>'https://m.media-amazon.com/images/I/71jABwvhA0L.jpg',


        ],
        [
            'name'=>'Samsung TV',
            'price'=>'100000',
            'discription'=>'A smartTV good as possible',
            'category'=>'tv',
            // 'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.in%2FSamsung-inches-Ready-UA32T4380AKXXL-Glossy%2Fdp%2FB0B8YTGC23&psig=AOvVaw0pjhraFJqtK-6oddb_9ErC&ust=1734937650342000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNCqta7puooDFQAAAAAdAAAAABAE',
            'gallery'=>'https://m.media-amazon.com/images/I/71jABwvhA0L.jpg',

        ],
        [
            'name'=>'LG TV',
            'price'=>'60000',
            'discription'=>'A smartTV with ultra big screen',
            'category'=>'mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/71jABwvhA0L.jpg',
        ],
        [
            'name'=>'panasonic fridge',
            'price'=>'150000',
            'discription'=>'A fridge with much cooling features',
            'category'=>'fridge',
            // 'gallery'=>'https://www.google.com/imgres?q=panasonic%20fridge&imgurl=https%3A%2F%2Fstore.in.panasonic.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2F40b589206cef99ab7dca1586fe425968%2Fn%2Fr%2Fnr-tg292bvhn-dp-1.png&imgrefurl=https%3A%2F%2Fstore.in.panasonic.com%2Frefrigerator%2Ffrost-free%2Ftg323-309-l-electric-grey-double-door-refrigerator-with-ai-inverter-technology.html&docid=j6ME8wKynD0U3M&tbnid=iyjecccSpDk3cM&vet=12ahUKEwjG38226bqKAxUV1TgGHX4bBycQM3oECGUQAA..i&w=800&h=800&hcb=2&ved=2ahUKEwjG38226bqKAxUV1TgGHX4bBycQM3oECGUQAA'
            'gallery'=>'https://m.media-amazon.com/images/I/71jABwvhA0L.jpg',

        ],
        [
            'name'=>'LG mobile',
            'price'=>'150000',
            'discription'=>'A smart phone much as possible',
            'category'=>'mobile',
            // 'gallery'=>'https://www.google.com/imgres?q=lg%20mobile&imgurl=https%3A%2F%2Fimages-cdn.ubuy.co.in%2F63b71367029b9c6f29074eb3-lg-velvet-5g-128gb-6-8-inch-display.jpg&imgrefurl=https%3A%2F%2Fwww.ubuy.co.in%2Fproduct%2F4RLDHTQQW-lg-velvet-5g-128gb-6-8-inch-display-48mp-triple-camera-lm-g900tm-unlocked-phone-aurora-grey&docid=jfMkRenM54Km-M&tbnid=-dScMp5-PanHMM&vet=12ahUKEwiJwdTW6bqKAxWfzzgGHQO8BNoQM3oECBsQAA..i&w=976&h=1500&hcb=2&ved=2ahUKEwiJwdTW6bqKAxWfzzgGHQO8BNoQM3oECBsQAA'
            'gallery'=>'https://m.media-amazon.com/images/I/71jABwvhA0L.jpg',

        ]
        ]);
    
    }
}
