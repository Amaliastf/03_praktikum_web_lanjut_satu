<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        //Prak 1.1 (home)
        public function home(){
            return view('home',['title' => 'Welcome To Our Site']);;
        }

        //Prak 1.2 (product)
        public function product(){
            return view('product',['products' => 'Our Products :
            <br>
                <ul>
                    <li>
                        <a href="https://www.educastudio.com/category/marbel-edu-games"> Educastudio Marbel Edu Games</a>
                    </li>
                    
                    <li>
                    <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games"> Educastudio Marbel and Friends Kids Games</a>
                    </li>

                    <li>
                    <a href="https://www.educastudio.com/category/riri-story-books"> Educastudio Riri Story Books</a>
                    </li>

                    <li>
                    <a href="https://www.educastudio.com/category/kolak-kids-songs"> Educastudio Kolak Kids Songs</a>
                    </li>
                </ul>
            ']);
        }

        //Prak 1.3 (News)
        public function news(){
            return view('news',['berita' => 'Our News :
            <br>
                <ul>
                    <li>
                        <a href="https://www.educastudio.com/news"> 1st News</a>
                    </li>
                    
                    <li>
                    <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-
                    covid-19"> 2nd News</a>
                    </li>
                </ul>
            ']);
        }

        //Prak 1.4 (Program)
        public function program(){
            return view('program',['programs' => 'Our Programs :
            <br>
                <ul>
                    <li>
                        <a href="https://www.educastudio.com/program/karir"> Educastudio Career Program</a>
                    </li>
                    
                    <li>
                    <a href="https://www.educastudio.com/program/magang"> Educastudio 
                    apprenticeship Program</a>
                    </li>

                    <li>
                    <a href="https://www.educastudio.com/program/kunjungan-industri"> Educastudio 
                    Industrial Visit Program</a>
                    </li>
                </ul>
            ']);
        }

        //Prak 1.5 (About-Us)
        public function about(){
            return view('about-us', ['about' => 'About Us']);
        }


        //Prak 1.6 (Contact-Us)
        public function index(){
            return view('contact-us',['contact' => 'Contact Us :
            <br>
                <ul>
                    <li>
                    mail 1 : cs@educastudio.com
                    </li>
                    
                    <li>
                    mail 2 : bd@educastudio.com
                    </li>
                </ul>
                <label>Contact</label>
                <br>
                <input placeholder="Enter Yours">
                <button>Submit</button>
            ']);
        }

}
