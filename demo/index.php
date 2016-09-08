<!DOCTYPE html>
<html lang="es" data-ng-app="materialAdmin">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Begin Inspectlet Embed Code -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
        <title>Demo - TravelPAQ Connect</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="vendors/bower_components/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/bower_components/angular-loading-bar/src/loading-bar.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.min.1.css">
        <link rel="stylesheet" type="text/css" href="css/app.min.2.css">
        <link rel="stylesheet" type="text/css" href="css/front.css">
        <script type="text/javascript" src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendors/angular/angular.min.js"></script>
        <script type="text/javascript" src="vendors/angular/angular-route.min.js"></script>
        <script type="text/javascript" src="vendors/angular/angular-resource.min.js"></script>
        <script type="text/javascript" src="vendors/angular/i18n/angular-locale_es-es.js"></script>
        <script type="text/javascript" src="vendors/bower_components/angular-loading-bar/src/loading-bar.js"></script>
        <script type="text/javascript" src="vendors/bower_components/oclazyload/dist/ocLazyLoad.min.js"></script>
        <script type="text/javascript" src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/services.js"></script>
        <script type="text/javascript" src="js/controllers.js"></script>
        <script type="text/javascript" src="vendors/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
        <script type="text/javascript" src="vendors/bower_components/nouislider-angular/nouislider.min.js"></script>
        <script type="text/javascript" src="js/modules/template.js"></script>
        <script type="text/javascript" src="js/modules/ui.js"></script>
        <script type="text/javascript" src="js/modules/form.js"></script>
        <script type="text/javascript" src="js/infinite-scroll.js"></script>
        <style>
            .header-mac{
                position: absolute;
                width: 100%;
                height: 20px;
                left: 0px;
                background-color: #dcdcdc;
                border-radius: 2px 2px 0 0;
            }

            .header-mac div{
                background-color: #bbb;
                width: 10px;
                height: 10px;
                position: absolute;
                border-radius: 50%;
            }

            .header-mac div:nth-child(1){
                top: 5px;
                left: 5px;
            }

            .header-mac div:nth-child(2){
                top: 5px;
                left: 18px;
            }

            .header-mac div:nth-child(3){
                top: 5px;
                left: 31px;
            }

            pre {
                background-color: #585858;
                border: 1px solid silver;
                padding: 10px 20px;
                color: white;
                margin: 20px;
            }
        </style>
    </head>
    <body id="body" data-ng-controller="materialadminCtrl as mactrl">
        <div id="container" ng-init="init()">
            <div id="header" style="display:none">
                <ul class="header-inner">
                    <li class="logo hidden-xs">
                        <img src="https://s3-sa-east-1.amazonaws.com/travelpaq.com.ar/img/logo-blanco.png" style="margin-top: -11%;width: 160px;padding: 14px 0px 6px 32px;"/>
                    </li>
                </ul>
            </div>
            <div id="contents" style="display:none;padding-top: 200px;">
                <div class="row w-100">
                    <div class="row">
                        <div class="card col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 bgm-white">
                            <div class="header-mac"><div></div><div></div><div></div></div>
                            <div class="card-header">
                                <h2 class="m-t-20">Buscador de paquetes</h2>
                            </div>
                            <div class="card-body">
                                <form name="search" id="search" novalidate="novalidate" method="post" accept-charset="utf-8">
                                    <div class="card-body card-padding">
                                        <div class="row w-100 m-0">
                                            <div class="col-xs-12">
                                                <div class="form-group fg-float">
                                                    <div class="fg-line">
                                                        <div class="input text required">
                                                            <input type="text" ng-model="origin_place_name" uib-typeahead="place.name for place in origins_place | filter:$viewValue | limitTo:8" class="form-control">
                                                        </div>
                                                    </div>
                                                    <label class="fg-label">Ciudad de origen</label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group fg-float">
                                                    <div class="fg-line">
                                                        <div class="input text required">
                                                            <input type="text" ng-model="destination_place_name" uib-typeahead="place.name for place in destinations_place | filter:$viewValue | limitTo:8" class="form-control">
                                                        </div>
                                                    </div>
                                                    <label class="fg-label">Ciudad de destino</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group fg-float">
                                                    <div class="fg-line">
                                                        <div class="input text required">
                                                            <input type="text" ng-model="month_departure_name" uib-typeahead="month.name for month in months | filter:$viewValue | limitTo:8" class="form-control">
                                                        </div>                                        
                                                    </div>
                                                    <label class="fg-label">Mes de salida</label>
                                                    <!--<small data-ng-show="submitted && !name" class="help-block c-red ng-hide">Completá este campo</small>-->
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group fg-float">
                                                    <div class="fg-line">
                                                        <div class="input text required">
                                                            <input type="text" ng-model="params.year_departure" uib-typeahead="year for year in years | filter:$viewValue | limitTo:8" class="form-control">
                                                        </div>                                        
                                                    </div>
                                                    <label class="fg-label">Año de salida</label>
                                                    <!--<small data-ng-show="submitted && !name" class="help-block c-red ng-hide">Completá este campo</small>-->
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <p class="f-500 c-black m-b-5">Dato criterio de orden</p>
                                                    <div class="btn-group w-100" style="box-shadow: none;">
                                                        <label class="btn btn-primary" ng-model="params.order_field" uib-btn-radio="'PRICE'" style="width:50%;">Precio</label>
                                                        <label class="btn btn-primary" ng-model="params.order_field" uib-btn-radio="'DEPARTURE_DATE'" style="width:50%;">Fecha</label>
                                                    </div>                                      
                                                    <!--<small data-ng-show="submitted && !name" class="help-block c-red ng-hide">Completá este campo</small>-->
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <p class="f-500 c-black m-b-5">Orden de resultados</p>
                                                    <div class="btn-group w-100" style="box-shadow: none;">
                                                        <label class="btn btn-primary" ng-model="params.order_type" uib-btn-radio="'ASC'" style="width:50%;">ASC</label>
                                                        <label class="btn btn-primary" ng-model="params.order_type" uib-btn-radio="'DESC'" style="width:50%;">DESC</label>
                                                    </div>                                      
                                                    <!--<small data-ng-show="submitted && !name" class="help-block c-red ng-hide">Completá este campo</small>-->
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <p class="f-500 c-black m-b-5">Cantidad de habitaciones</p>
                                                    <div class="fg-line">
                                                        <div class="select">
                                                            <select class="form-control" ng-model="rooms">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="w-100 pull-left z-depth-1 p-10 m-b-20" ng-repeat="room in params.Room">
                                                    <p class="f-500 c-black m-b-5">Habitación # {{$index + 1}}</p>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <p class="f-500 c-black m-b-5"># Adultos</p>
                                                            <div class="fg-line">
                                                                <div class="select">
                                                                    <select class="form-control" ng-model="room.adult">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <p class="f-500 c-black m-b-5"># Niños</p>
                                                            <div class="fg-line">
                                                                <div class="select">
                                                                    <select class="form-control" ng-model="children[$index]" ng-change="changeRoom(room, children[$index])">
                                                                        <option value="0">0</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-xs-6" ng-repeat="child in room.Children">
                                                        <div class="form-group">
                                                            <p class="f-500 c-black m-b-5">Edad # {{$index + 1}}</p>
                                                            <div class="fg-line">
                                                                <div class="select">
                                                                    <select class="form-control" ng-model="child.age">
                                                                        <option value="0">0</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">17</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                          
                                        <button ng-click="getPackageList()" class="btn btn-success w-100" type="button">
                                            <i style="padding: 8px 2px;font-size: 10px;" class="glyphicon glyphicon-search"></i>
                                            Buscar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card col-md-5 col-xs-10 col-xs-offset-0 bgm-white m-l-30" style="min-height: 690px;">
                            <div class="header-mac"><div></div><div></div><div></div></div>
                            <div class="card-header">
                                <h2 class="m-t-20">Formato de JSON Request</h2>
                            </div>
                            <div class="card-body">
                                <pre style="height: 550px;">
                                  {{params | json}}
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card col-xs-5 col-xs-10 col-xs-offset-1 bgm-white m-t-30">
                            <div class="header-mac"><div></div><div></div><div></div></div>
                            <div class="card-header">
                                <h2 class="m-t-20">Resultados del buscador (Front)</h2>
                            </div>
                            <div class="card-body">
                                <div class="row package-list z-depth-2" ng-repeat="package in response.result">
                                    <table class="col-xs-12 package-data" >
                                        <tr>
                                            <td class="col-xs-8 package-data" style="background-image:url('{{package.Image[0].picture}}');vertical-align: top;">
                                                <div class="col-xs-12 package-title">
                                                    <h2 class="title col-xs-9">{{package.title}}<small>{{numberNights(package)}} noches</small></h2>
                                                    <div class="col-xs-3 icons">
                                                        <div ng-if="package.Accommodation" class="icon"><i class="md md-hotel"></i></div>
                                                        <div ng-if="package.Departure.transport_kind == 'airline'" class="icon"><i class="md md-flight"></i></div>
                                                        <div ng-if="package.Departure.transport_kind == 'bus'" class="icon"><i class="md md-directions-bus"></i></div>
                                                        <div ng-if="package.Departure.transport_kind == 'cruise'" class="icon"><i class="md md-directions-ferry"></i></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-xs-4 package-price">
                                                <div class="w-100 price text-center">
                                                    <h2>
                                                        <small>precio por persona</small>
                                                        {{currency(package.Price.currency)}} {{package.Price.price_per_person | number}}

                                                    </h2>
                                                </div>        
                                                <div class="w-100 description">
                                                    <ul>
                                                        <li>
                                                            <div class="col-xs-6 text-left">Precio total </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(package.Price.currency)}} 
                                                                {{package.Price.Total_Price.neto + package.Price.Total_Price.tax + package.Price.Total_Price.imp | number}}
                                                            </div>
                                                        </li>
                                                        <li ng-if="package.Price.Total_Price.neto > 0">
                                                            <div class="col-xs-6 text-left">Precio neto </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(package.Price.currency)}} 
                                                                {{package.Price.Total_Price.neto}}
                                                            </div>
                                                        </li>
                                                        <li ng-if="package.Price.Total_Price.tax  > 0">
                                                            <div class="col-xs-6 text-left">Impuestos </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(package.Price.currency)}} 
                                                                {{package.Price.Total_Price.tax}}
                                                            </div>
                                                        </li>
                                                        <li ng-if="package.Price.Total_Price .vat > 0">
                                                            <div class="col-xs-6 text-left">IVA </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(package.Price.currency)}} 
                                                                {{package.Price.Total_Price.vat}}
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--<div class="col-xs-6 btn btn-warning" style="width: 80px;margin-left: 20px;margin-right: 10px;">avail</div>-->
                                                <div class="w-100 btn btn-success" ng-click="getPackage(package.id)">detalles</div>
                                            </td>
                                        <tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card col-xs-5 col-xs-offset-0 col-xs-10 col-xs-offset-1  bgm-white m-t-30 m-l-30">
                            <div class="header-mac"><div></div><div></div><div></div></div>
                            <div class="card-header">
                                <h2 class="m-t-20">Resultados del buscador (JSON)</h2>
                            </div>
                            <div class="card-body">
                                <pre>
                                  {{response | json}}
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="package-view">
                        <div class="card col-xs-5 col-xs-10 col-xs-offset-1 bgm-white m-t-30">
                            <div class="header-mac"><div></div><div></div><div></div></div>
                            <div class="card-header">
                                <h2 class="m-t-20">Detalle de paquete <span ng-if="selected_package"> # {{selected_package.id}}</span></h2>
                            </div>
                            <div class="card-body">
                                <div class="row package-list z-depth-2" ng-if="selected_package">
                                    <table class="col-xs-12 package-data">
                                        <tr>
                                            <td class="col-xs-8 package-data" style="background-image:url('{{selected_package.Image[0].picture}}');vertical-align: top;">
                                                <div class="col-xs-12 package-title">
                                                    <h2 class="title col-xs-9">{{selected_package.title}}<small>{{numberNights(package)}} noches</small></h2>
                                                    <div class="col-xs-3 icons">
                                                        <div ng-if="selected_package.Accommodation" class="icon"><i class="md md-hotel"></i></div>
                                                        <div ng-if="selected_package.Departure.transport_kind == 'airline'" class="icon"><i class="md md-flight"></i></div>
                                                        <div ng-if="selected_package.Departure.transport_kind == 'bus'" class="icon"><i class="md md-directions-bus"></i></div>
                                                        <div ng-if="selected_package.Departure.transport_kind == 'cruise'" class="icon"><i class="md md-directions-ferry"></i></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-xs-4 package-price">
                                                <div class="w-100 price text-center">
                                                    <h2>
                                                        <small>precio por persona</small>
                                                        {{currency(selected_package.Price.currency)}} {{selected_package.Price.price_per_person | number}}

                                                    </h2>
                                                </div>        
                                                <div class="w-100 description">
                                                    <ul>
                                                        <li>
                                                            <div class="col-xs-6 text-left">Precio total </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(selected_package.Price.currency)}} 
                                                                {{selected_package.Price.Total_Price.neto + selected_package.Price.Total_Price.tax + selected_package.Price.Total_Price.imp | number}}
                                                            </div>
                                                        </li>
                                                        <li ng-if="selected_package.Price.Total_Price.neto > 0">
                                                            <div class="col-xs-6 text-left">Precio neto </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(selected_package.Price.currency)}} 
                                                                {{selected_package.Price.Total_Price.neto}}
                                                            </div>
                                                        </li>
                                                        <li ng-if="selected_package.Price.Total_Price.tax  > 0">
                                                            <div class="col-xs-6 text-left">Impuestos </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(selected_package.Price.currency)}} 
                                                                {{selected_package.Price.Total_Price.tax}}
                                                            </div>
                                                        </li>
                                                        <li ng-if="selected_package.Price.Total_Price .vat > 0">
                                                            <div class="col-xs-6 text-left">IVA </div>
                                                            <div class="col-xs-6 text-right">
                                                                {{currency(selected_package.Price.currency)}} 
                                                                {{selected_package.Price.Total_Price.vat}}
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--<div class="col-xs-6 btn btn-warning" style="width: 80px;margin-left: 20px;margin-right: 10px;">avail</div>-->
                                                <div class="w-100 btn btn-warning m-b-15">Disponibilidad</div>
                                                <div class="w-100 btn btn-success">Reserva</div>
                                            </td>
                                        <tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card col-xs-5 col-xs-offset-0 col-xs-10 col-xs-offset-1  bgm-white m-t-30 m-l-30">
                            <div class="header-mac"><div></div><div></div><div></div></div>
                            <div class="card-header">
                                <h2 class="m-t-20">Resultados del buscador (JSON)</h2>
                            </div>
                            <div class="card-body">
                                <pre>
                                  {{selected_package | json}}
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div id="loading-bar-spinner"><div class="spinner-icon"></div></div>
        </div>
        <script type="text/javascript">
            window.onload=function(){
                $('#header').show();
                $('#left-sidebar').show();
                $('#contents').show();  
                $('#right-sidebar').show();
                $('#loading-bar-spinner').hide();
            }
        </script>
    </body>
</html>
