<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="robots" content="noindex">
    <title>Metro City | Новостройки</title>

    <!-- <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../../public/fonts/icomoon/icon-font.css">
    <link rel="stylesheet" href="../../../public/libs/animate/animate.min.css">
    <link rel="stylesheet" href="../../../public/css/style.min.css"/>
</head>

<body>

<main class="main">

    <div class="container">

        <div class="page-top">

            <nav class="page-breadcrumb" itemprop="breadcrumb">
                <a href="/">Главная</a>
                <span class="breadcrumb-separator"> > </span>

                Новостройки
            </nav>

            <div class="page-top__switchers">

                <div class="container">
                    <div class="row">

                        <div class="page-top__switchers-inner">

                            <a href="#" class="page-top__filter">
                                <span class="icon-filter"></span>
                                Фильтры
                            </a>

                            <a href="#" data-tab-name="loop" class="page-top__switcher tab-nav active">
                                <span class="icon-grid"></span>
                            </a>

                            <a href="#" data-tab-name="map" class="page-top__switcher tab-nav">
                                <span class="icon-marker"></span>
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="page-section">

            <div class="page-content">

                <h1 class="visuallyhidden">Новостройки</h1>

                <div class="page-loop__wrapper loop tab-content tab-content__active">

                    <ul class="page-loop with-filter">


                        @foreach($buildings as $building)
                            <li class="page-loop__item wow animate__animated animate__fadeInUp"
                                data-wow-duration="0.8s">

                                <a href="#" class="favorites-link favorites-link__add" title="Добавить в Избранное"
                                   role="button">
                                    <span class="icon-heart"><span class="path1"></span><span
                                            class="path2"></span></span>
                                </a>

                                <a href="#" class="page-loop__item-link">

                                    <div class="page-loop__item-image">

                                        <img src="../../../public/storage/{{$building->image}}" alt="">

                                        <div class="page-loop__item-badges">
                                            <span class="badge">Услуги 0%</span>
                                            <span class="badge">Комфорт+</span>
                                        </div>

                                    </div>

                                    <div class="page-loop__item-info">

                                        <h3 class="page-title-h3">{{$building->name}}</h3>

                                        <p class="page-text"></p>

                                        <div class="page-text to-metro">
                                            <span class="icon-metro icon-metro--red"></span>
                                            <span class="page-text">{{$building->distance}}</span>
                                            <span class="icon-walk-icon"></span>
                                        </div>

                                        <span class="page-text text-desc">{{$building->address}}</span>

                                    </div>
                                </a>
                                @endforeach

                            </li>
                    </ul>

                    <div class="show-more">

                        <button class="show-more__button">

                            <span class="show-more__button-icon"></span>

                            Показать еще

                        </button>

                    </div>

                </div>

                <div class="page-map tab-content map">

                    <h1>Тут будет карта</h1>

                </div>

            </div>

            <div class="page-filter fixed">

                <div class="page-filter__wrapper">

                    <form method="post" action="{{route('filter')}}">
                        @csrf
                        <div class="page-filter__body">

                            <div class="page-filter__category">

                                <a href="#deadline" class="page-filter__category-link" data-toggle="collapse">
                                    <h3 class="page-title-h3">Срок сдачи</h3>
                                    <svg width="13" height="8" viewBox="0 0 13 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                                            fill="#111111"/>
                                    </svg>
                                </a>

                                <div class="page-filter__category-list collapse show" id="deadline">
                                    <ul class="deadline">
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="deadline" id="all" value="1" checked>
                                                <label for="all">Любой</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="deadline" id="passed" value="2">
                                                <label for="passed">Сдан</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="deadline" id="this-year"
                                                       value="3">
                                                <label for="this-year">В этом году</label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <div class="page-filter__category">

                                <a href="#housing" class="page-filter__category-link" data-toggle="collapse">
                                    <h3 class="page-title-h3">Класс жилья</h3>
                                    <svg width="13" height="8" viewBox="0 0 13 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                                            fill="#111111"/>
                                    </svg>
                                </a>

                                <div class="page-filter__category-list collapse show" id="housing">

                                    <ul class="housing">
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="class" id="economy" value="1">
                                                <label for="economical">Эконом</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="class" id="comfort" value="2">
                                                <label for="comfort">Комфорт</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="class" id="business" value="3">
                                                <label for="business">Бизнес</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="class" id="elite" value="4">
                                                <label for="elite">Элит</label>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>

                        <div class="page-filter__buttons">

                            <button class="button button--pink w-100" type="submit" id="apply_filter">Применить
                                фильтры
                            </button>

                        </div>

                    </form>

                    <a href="{{route('buildings')}}">
                        <button class="button backdrop-blur-0" type="submit" id="apply_filter">Сбросить
                            фильтры
                        </button>
                    </a>

                </div>


            </div>

        </div>

    </div>

</main>

<!-- <footer style="height: 500px; background-color: #fff;"></footer> -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="../../../public/libs/bootstrap/js/popper.min.js"></script>
<script src="../../../public/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../public/libs/ofi/ofi.min.js"></script>
<script src="../../../public/libs/wowjs/wow.min.js"></script>
<script src="../../../public/js/scripts.js"></script>
</body>

</html>
