<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="mainData">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <script data-require="angular.js@1.3.0" data-semver="1.3.0" src="https://code.angularjs.org/1.3.0/angular.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="author" content="">
    <title>Congress API</title>
    <script src="main.js"></script>
    <link href="stylesheet.css" rel="stylesheet">
    <script src="dirPagination.js"></script>
    <script src="app.js"></script>

</head>

<body>
    <header class="page-header" style="overflow:auto;padding:0px;margin:0px;background-color:#f9f9f9;">
      <div class="col-lg-12">
        <div class="col-lg-1">  <span style="float:left;padding-left:10px;font-size:20px;"><a href="#menu-toggle" class=" btn-default" id="menu-toggle">☰</a></span></div>
        <div class="col-lg-offset-5"><img src="images/logo.png" width="80" height="20"/><b>Congress API</b></div>
      </div>
    </header>
    <div id="wrapper">


        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="active">
                    <a data-toggle="tab" ng-click="filterMain('legismain')" href="#L" data-icon="glyphicon-heart">
                        <div style="overflow:auto">
                            <div style="float:left" class=""><i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div style="float:left;margin-left:-15px;" class="hidden-xs">Legislators</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" ng-click="filterMain('billmain')" href="#B" data-icon="glyphicon-heart">
                        <div style="overflow:auto">
                            <div style="float:left" class=""><i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                            </div>
                            <div style="float:left;margin-left:-15px;" class="hidden-xs">Bills</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" ng-click="filterMain('commain')" href="#C" data-icon="glyphicon-heart">
                        <div style="overflow:auto">
                            <div style="float:left" class=""><i class="fa fa-sign-in" aria-hidden="true"></i>
                            </div>
                            <div style="float:left;margin-left:-15px;" class="hidden-xs">Committees</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" ng-click="filterMain('favmain')" href="#F" data-icon="glyphicon-heart">
                        <div style="overflow:auto">
                            <div style="float:left" class=""><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div style="float:left;margin-left:-15px;" class="hidden-xs">Favorites</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade in active" id="L" style="background-color:#f2f2ef;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="title" style="color:#4f4f4f;font-size:30px;">Legislators</h2>
                            <hr>
                            <div class="data" style="padding:5px;background-color: white;">
                                <div id="ismdb" class="carousel slide" data-interval="false" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <ul class="nav nav-tabs" id="tabs">
                                                <li class="active"><a class="tab1" data-toggle="tab" ng-click="filterTabLeg(' ')" href="#First">By State</a>
                                                </li>
                                                <li><a class="tab1" data-toggle="tab" ng-click="filterTabLeg('house')" href="#Second">House</a>
                                                </li>
                                                <li><a class="tab1" data-toggle="tab" ng-click="filterTabLeg('senate')" href="#Third">Senate</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="padding:10px;">
                                                <div class="tab-pane active" id="First">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                Legislators by {{heading}}
                                                                <select class="selectpicker" style="float:right"  ng-model="searchlegis1">
                                                                    <option class="placeholder" selected disabled value="">All States</option>
                                                                    <option >Alabama</option>
                                                                  	<option >Alaska</option>
                                                                  	<option >Arizona</option>
                                                                  	<option >Arkansas</option>
                                                                  	<option >California</option>
                                                                  	<option >Colorado</option>
                                                                  	<option >Connecticut</option>
                                                                  	<option >Delaware</option>
                                                                  	<option >District Of Columbia</option>
                                                                  	<option >Florida</option>
                                                                  	<option >Georgia</option>
                                                                  	<option >Hawaii</option>
                                                                  	<option >Idaho</option>
                                                                  	<option >Illinois</option>
                                                                  	<option >Indiana</option>
                                                                  	<option >Iowa</option>
                                                                  	<option >Kansas</option>
                                                                  	<option >Kentucky</option>
                                                                  	<option >Louisiana</option>
                                                                  	<option >Maine</option>
                                                                  	<option >Maryland</option>
                                                                  	<option >Massachusetts</option>
                                                                  	<option >Michigan</option>
                                                                  	<option >Minnesota</option>
                                                                  	<option >Mississippi</option>
                                                                  	<option >Missouri</option>
                                                                  	<option >Montana</option>
                                                                  	<option >Nebraska</option>
                                                                  	<option >Nevada</option>
                                                                  	<option >New Hampshire</option>
                                                                  	<option >New Jersey</option>
                                                                  	<option >New Mexico</option>
                                                                  	<option >New York</option>
                                                                  	<option >North Carolina</option>
                                                                  	<option >North Dakota</option>
                                                                  	<option >Ohio</option>
                                                                  	<option >Oklahoma</option>
                                                                  	<option >Oregon</option>
                                                                  	<option >Pennsylvania</option>
                                                                  	<option >Rhode Island</option>
                                                                  	<option >South Carolina</option>
                                                                  	<option >South Dakota</option>
                                                                  	<option >Tennessee</option>
                                                                  	<option >Texas</option>
                                                                  	<option >Utah</option>
                                                                  	<option >Vermont</option>
                                                                  	<option >Virginia</option>
                                                                  	<option >Washington</option>
                                                                  	<option >West Virginia</option>
                                                                  	<option >Wisconsin</option>
                                                                  	<option >Wyoming</option>
                                                                </select>
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-xs-2">Party</th>
                                                                            <th class="col-xs-2">Name</th>
                                                                            <th class="col-xs-2">Chamber</th>
                                                                            <th class="col-xs-2">District</th>
                                                                            <th class="col-xs-2">State</th>
                                                                            <th class="col-xs-2"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="l1" dir-paginate="result in results|orderBy:['state_name','last_name']|filter:searchlegis1|itemsPerPage:10">
                                                                            <td><img ng-src="{{result.party == 'R' && 'images/r.png' || 'images/d.png'}}" height="30px" width="30px" />
                                                                            </td>
                                                                            <td>{{result.first_name}}, {{result.last_name}}</td>
                                                                            <td><img ng-src="{{result.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.district == NULL && 'NA' || 'District:'}} {{result.district}}</td>
                                                                            <td>{{result.state_name}}</td>
                                                                            <td>
                                                                                <button type="button" href="#ismdb" data-slide="next" class="btn btn-primary btn-sm" ng-click="viewTask(result);">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-6 col-md-offset-3">
                                                                    <dir-pagination-controls max-size="9" pagination-id="l1" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="Second">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                Legislators by {{heading}}
                                                                <input ng-show="{{true}}" style="float:right" type="text" ng-model="searchlegis2" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-xs-2">Party</th>
                                                                            <th class="col-xs-2">Name</th>
                                                                            <th class="col-xs-2">Chamber</th>
                                                                            <th class="col-xs-2">District</th>
                                                                            <th class="col-xs-2">State</th>
                                                                            <th class="col-xs-2"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="l2" dir-paginate="result in results|orderBy:'last_name'|filter:searchlegis2|itemsPerPage:10">
                                                                            <td><img ng-src="{{result.party == 'R' && 'images/r.png' || 'images/d.png'}}" height="30px" width="30px" />
                                                                            </td>
                                                                            <td>{{result.first_name}}, {{result.last_name}}</td>
                                                                            <td><img ng-src="{{result.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.district == NULL && 'NA' || 'District:'}} {{result.district}}</td>
                                                                            <td>{{result.state_name}}</td>
                                                                            <td>
                                                                                <button type="button" href="#ismdb" data-slide="next" class="btn btn-primary btn-sm" ng-click="viewTask(result);">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-6 col-md-offset-3">
                                                                    <dir-pagination-controls  pagination-id="l2" max-size="9" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="Third">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                Legislators by {{heading}}
                                                                <input ng-show="{{true}}" style="float:right" type="text" ng-model="searchlegis3" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-xs-2">Party</th>
                                                                            <th class="col-xs-2">Name</th>
                                                                            <th class="col-xs-2">Chamber</th>

                                                                            <th class="col-xs-2">State</th>
                                                                            <th class="col-xs-2"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="l3" dir-paginate="result in results|orderBy:'last_name'|filter:searchlegis3|itemsPerPage:10">
                                                                            <td><img ng-src="{{result.party == 'R' && 'images/r.png' || 'images/d.png'}}" height="30px" width="30px" />
                                                                            </td>
                                                                            <td>{{result.first_name}}, {{result.last_name}}</td>
                                                                            <td><img ng-src="{{result.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{result.chamber}}</td>

                                                                            <td>{{result.state_name}}</td>
                                                                            <td>
                                                                                <button type="button" href="#ismdb" data-slide="next" class="btn btn-primary btn-sm" ng-click="viewTask(result);">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-6 col-md-offset-3">
                                                                    <dir-pagination-controls max-size="9" pagination-id="l3" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                         <table class="table">
                                          <tbody>
                                             <tr>
                                               <td class="col-xs-5">
                                                 <a href="#ismdb" data-slide-to="0">
                                                     <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> </button>
                                                 </a>
                                                 <b>Details</b>
                                               </td>

                                               <td class="col-xs-6">

                                               </td>
                                               <td class="col-xs-1">

                                               </td>
                                               <td >
                                                 <button type="button" ng-click="addItemLegis(record);" class="btn btn-default"><i class="fa" ng-class="{'fa-star icon-f' : record.isFavoriteL , 'fa-star-o' : !record.isFavoriteL }" ></i></button>

                                               </td>
                                             </tr>
                                          </tbody>
                                        </table>
                                            <hr>
                                             <div  class="col-lg-12 large">
                                                <div class="col-lg-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan=5 colspan=2><img height="170px" width="150px" ng-src="https://theunitedstates.io/images/congress/original/{{record.bioguide_id}}.jpg">
                                                                </td>
                                                                <td colspan=2>{{record.title}} {{record.last_name}} {{record.first_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=2><a ng-click="javascript:window.open('mailto:{{record.oc_email}}', 'Mail');event.preventDefault()" ng-href="mailto:{{record.oc_email}}">{{record.oc_email}}</a>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=2>Chamber:&nbsp;{{record.chamber}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=2><a href="">Contact:&nbsp;{{record.phone}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=2><img ng-src="{{result.party == 'R' && 'images/r.png' || 'images/d.png'}}" height="30px" width="30px" />&nbsp;{{result.party == 'R' && 'Republican' || 'Democrat'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <div><b>Start Term:</b>
                                                                    </div>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div>{{record.term_start | date:'MMM d, y'}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <div><b>End Term:</b>
                                                                    </div>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div>{{record.term_end | date:'MMM d, y'}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <div><b>Term:</b>
                                                                    </div>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{progressvalue}}" aria-valuemin="0" aria-valuemax="100" ng-style="{width : ( progressvalue + '%' ) }">
                                                                            {{progressvalue}}%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <div><b>Office:</b>
                                                                    </div>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div>{{record.office}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <div><b>State:</b>
                                                                    </div>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div>{{record.state_name}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <div><b>Fax:</b>
                                                                    </div>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div><a>{{record.fax}}</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <div><b>Birthday:</b>
                                                                    </div>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div>{{record.birthday| date:'MMM d, y'}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=1>
                                                                    <b>
                                                       Social Links:
                                                     </b>
                                                                </td>
                                                                <td colspan=3>
                                                                    <div>
                                                                        <a target="_blank" ng-href="https://www.facebook.com/{{record.facebook_id}}"><img ng-src="images/f.png" height="30px" width="30px">
                                                                        </a>
                                                                        <a target="_blank" ng-href="https://www.twitter.com/{{record.twitter_id}}"><img ng-src="images/t.png" height="30px" width="30px">
                                                                        </a>
                                                                        <a target="_blank" ng-href="{{record.website}}"><img ng-src="images/w.png" height="30px" width="30px">
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-6">
                                                    Committees
                                                    <table class="table  table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Chamber</th>
                                                                <th>Committee ID</th>
                                                                <th>Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="committee in committees|limitTo:quantity">
                                                                <td>{{committee.chamber}}</td>
                                                                <td>{{committee.committee_id}}</td>
                                                                <td>{{committee.name}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table class="table  table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Bills ID</th>
                                                                <th>title </th>
                                                                <th>Chamber</th>
                                                                <th>Bill Type</th>
                                                                <th>Congress</th>
                                                                <th>Link</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="bill in bills|limitTo:quantity">
                                                                <td>{{bill.bill_id}}</td>
                                                                <td>{{bill.official_title}}</td>
                                                                <td>{{bill.chamber}}</td>
                                                                <td>{{bill.bill_type}}</td>
                                                                <td>{{bill.congress}}</td>
                                                                   <td><a target="_blank" ng-href="{{bill.last_version.urls.pdf}}">Link</a>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                             <div  class="col-lg-12 small">
                                               <div class="col-lg-6">
                                                   <table class="table">
                                                       <tbody>
                                                           <tr>
                                                               <td ><img height="170px" width="150px" ng-src="https://theunitedstates.io/images/congress/original/{{record.bioguide_id}}.jpg">
                                                               </td></tr>
                                                                <tr><td >{{record.title}} {{record.last_name}} {{record.first_name}}</td>
                                                           </tr>
                                                           <tr>
                                                               <td ><a ng-click="javascript:window.open('mailto:{{record.oc_email}}', 'Mail');event.preventDefault()" ng-href="mailto:{{record.oc_email}}">{{record.oc_email}}</a>

                                                               </td>
                                                           </tr>
                                                           <tr>
                                                               <td >Chamber:&nbsp;{{record.chamber}}</td>
                                                           </tr>
                                                           <tr>
                                                               <td ><a href="">Contact:&nbsp;{{record.phone}}</a>
                                                               </td>
                                                           </tr>
                                                           <tr>
                                                               <td ><img ng-src="{{result.party == 'R' && 'images/r.png' || 'images/d.png'}}" height="30px" width="30px" />&nbsp;{{result.party == 'R' && 'Republican' || 'Democrat'}}</td>
                                                           </tr>
                                                           <tr>

                                                               <td >
                                                                   <div>{{record.term_start | date:'MMM d, y'}}</div>
                                                               </td>
                                                           </tr>
                                                           <tr>

                                                               <td >
                                                                   <div>{{record.term_end | date:'MMM d, y'}}</div>
                                                               </td>
                                                           </tr>

                                                           <tr>

                                                               <td >
                                                                   <div>{{record.office}}</div>
                                                               </td>
                                                           </tr>
                                                           <tr>

                                                               <td >
                                                                   <div>{{record.state_name}}</div>
                                                               </td>
                                                           </tr>
                                                           <tr>

                                                               <td >
                                                                   <div><a>{{record.fax}}</a>
                                                                   </div>
                                                               </td>
                                                           </tr>
                                                           <tr>

                                                               <td >
                                                                   <div>{{record.birthday| date:'MMM d, y'}}</div>
                                                               </td>
                                                           </tr>
                                                           <tr>

                                                               <td >
                                                                   <div>
                                                                       <a target="_blank" ng-href="https://www.facebook.com/{{record.facebook_id}}"><img ng-src="images/f.png" height="30px" width="30px">
                                                                       </a>
                                                                       <a target="_blank" ng-href="https://www.twitter.com/{{record.twitter_id}}"><img ng-src="images/t.png" height="30px" width="30px">
                                                                       </a>
                                                                       <a target="_blank" ng-href="{{record.website}}"><img ng-src="images/w.png" height="30px" width="30px">
                                                                       </a>
                                                                   </div>
                                                               </td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                               </div>
                                               <div class="col-lg-6">
                                                   Committees
                                                   <table class="table table-bordered  table-hover">
                                                       <thead>
                                                           <tr>
                                                               <th>Chamber</th>
                                                               <th>Committee ID</th>

                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                           <tr ng-repeat="committee in committees|limitTo:quantity">
                                                               <td>{{committee.chamber}}</td>
                                                               <td>{{committee.committee_id}}</td>

                                                           </tr>
                                                       </tbody>
                                                   </table>
                                                   <br>
                                                   Bills
                                                   <table class="table table-bordered table-hover">
                                                       <thead>
                                                           <tr>
                                                               <th>Bills ID</th>

                                                               <th>Link</th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                           <tr ng-repeat="bill in bills|limitTo:quantity">
                                                               <td>{{bill.bill_id}}</td>

                                                               <td><a target="_blank" ng-href="{{bill.last_version.urls.pdf}}">Link</a>
                                                               </td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="B" style="background-color:#f2f2ef;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="title" style="color:#4f4f4f;font-size:30px;">Bills</h2>
                            <hr>
                            <div class="data" style="padding:5px;background-color: white;">
                                <div id="ismdb2" class="carousel slide" data-interval="false" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <ul class="nav nav-tabs" id="tabs">
                                                <li class="active"><a class="tab1" data-toggle="tab" ng-click="filterTabBill('Active')" href="#First">Active Bills</a>
                                                </li>
                                                <li><a class="tab1" data-toggle="tab" ng-click="filterTabBill('New')" href="#Second">New Bills</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="padding:10px;">
                                                <div class="tab-pane active" id="First">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                {{heading}} bills
                                                                <input style="float:right" type="text" ng-model="searchbill1" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover mainbillsmall">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-xs-1">Bill ID</th>
                                                                            <th class="col-xs-1">Bill Type</th>

                                                                            <th class="col-xs-1">Chamber</th>
                                                                            <th class="col-xs-1">Introduced</th>
                                                                            <th class="col-xs-2">Sponsor</th>
                                                                            <th class="col-xs-1"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="b1" dir-paginate="result in results|filter:searchbill1|itemsPerPage:10">
                                                                            <td>{{result.bill_id| uppercase}}</td>
                                                                            <td>{{result.bill_type| uppercase}}</td>

                                                                            <td><img ng-src="{{result.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.introduced_on}}</td>
                                                                            <td>{{result.sponsor.first_name}}, {{result.sponsor.last_name}}</td>
                                                                            <td>
                                                                                <button type="button" href="#ismdb2" data-slide="next" ng-click="viewTask1(result);" class="btn btn-primary btn-sm">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table  table-hover mainbilllarge">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-xs-1">Bill ID</th>
                                                                            <th class="col-xs-1">Bill Type</th>
                                                                            <th class="col-xs-5">Title</th>
                                                                            <th class="col-xs-1">Chamber</th>
                                                                            <th class="col-xs-1">Introduced</th>
                                                                            <th class="col-xs-2">Sponsor</th>
                                                                            <th class="col-xs-1"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="b1" dir-paginate="result in results|filter:searchbill1|itemsPerPage:10">
                                                                            <td>{{result.bill_id| uppercase}}</td>
                                                                            <td>{{result.bill_type| uppercase}}</td>
                                                                            <td>{{result.official_title}}</td>
                                                                            <td><img ng-src="{{result.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.introduced_on}}</td>
                                                                            <td>{{result.sponsor.first_name}}, {{result.sponsor.last_name}}</td>
                                                                            <td>
                                                                                <button type="button" href="#ismdb2" data-slide="next" ng-click="viewTask1(result);" class="btn btn-primary btn-sm">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-4 col-md-offset-4">
                                                                    <dir-pagination-controls max-size="9" pagination-id="b1" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="Second">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                {{heading}} bills
                                                                <input style="float:right" type="text" ng-model="searchbill2" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-xs-1">Bill ID</th>
                                                                            <th class="col-xs-1">Bill Type</th>
                                                                            <th class="col-xs-5">Title</th>
                                                                            <th class="col-xs-1">Chamber</th>
                                                                            <th class="col-xs-1">Introduced</th>
                                                                            <th class="col-xs-2">Sponsor</th>
                                                                            <th class="col-xs-1"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="b2" dir-paginate="result in results|orderBy:'introduced_on'|filter:searchbill2|itemsPerPage:10">
                                                                            <td>{{result.bill_id| uppercase}}</td>
                                                                            <td>{{result.bill_type| uppercase}}</td>
                                                                            <td>{{result.official_title}}</td>
                                                                            <td><img ng-src="{{result.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.introduced_on}}</td>
                                                                            <td>{{result.sponsor.first_name}} {{result.sponsor.last_name}}</td>
                                                                            <td>
                                                                                <button type="button" href="#ismdb2" data-slide="next" ng-click="viewTask1(result);" class="btn btn-primary btn-sm">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-4 col-md-offset-4">
                                                                    <dir-pagination-controls max-size="9" pagination-id="b2" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                          <table class="table">
                                            <tbody>
                                               <tr>
                                                 <td class="col-xs-2">
                                                   <a href="#ismdb2" data-slide-to="0">
                                                       <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> </button>
                                                   </a>
                                                   <b>Details</b>
                                                 </td>
                                                 <td class="col-xs-9">

                                                 </td>
                                                 <td class="col-xs-1">

                                                 </td>
                                                 <td >

                                                  <button type="button" ng-click="addItemBills(record);" class="btn btn-default"><i class="fa" ng-class="{'fa-star icon-f' : record.isFavoriteB , 'fa-star-o' : !record.isFavoriteB }" ></i></button>
                                                 </td>
                                               </tr>
                                            </tbody>
                                          </table>
                                            <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                    <table class="table  table-hover largebill">
                                                        <tbody>
                                                            <tr>
                                                                <tr>
                                                                    <td>Bill ID:</td>
                                                                    <td>{{record.bill_id| uppercase}}</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Title</td>
                                                                    <td>{{record.official_title}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bill Type</td>
                                                                    <td>{{record.bill_type| uppercase}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sponsor</td>
                                                                    <td>{{record.sponsor.first_name}} {{result.sponsor.last_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chamber</td>
                                                                    <td>{{record.chamber}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>{{record.state}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Introduced On</td>
                                                                    <td>{{record.introduced_on}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Congress URL</td>
                                                                    <td><a target='_blank' ng-href="{{record.urls.congress}}">URL</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Version Status</td>
                                                                    <td>{{record.last_version.version_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bill URL</td>
                                                                    <td><a target='_blank' ng-href="{{record.last_version.urls.pdf}}">Link</a>
                                                                    </td>
                                                                </tr>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table  table-hover smallbill">
                                                        <tbody>
                                                            <tr>
                                                                <tr>
                                                                    <td>Bill ID:</td>
                                                                    <td>{{record.bill_id| uppercase}}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Bill Type</td>
                                                                    <td>{{record.bill_type| uppercase}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sponsor</td>
                                                                    <td>{{record.sponsor.first_name}} {{result.sponsor.last_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chamber</td>
                                                                    <td>{{record.chamber}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>{{record.state}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Introduced On</td>
                                                                    <td>{{record.introduced_on}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Congress URL</td>
                                                                    <td><a target='_blank' ng-href="{{record.urls.congress}}">URL</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Version Status</td>
                                                                    <td>{{record.last_version.version_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bill URL</td>
                                                                    <td><a target='_blank' ng-href="{{record.last_version.urls.pdf}}">Link</a>
                                                                    </td>
                                                                </tr>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id ="pdfspace" class="col-lg-6">
                                                    <object ng-attr-data="{{record.last_version.urls.pdf}}" type="application/pdf" height="100%" width="100%"></object>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="C" style="background-color:#f2f2ef;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="title" style="color:#4f4f4f;font-size:30px;">Commmittees</h2>
                            <hr>
                            <div class="data" style="padding:5px;background-color: white;">
                                <div id="ismdb2" class="carousel slide" data-interval="false" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <ul class="nav nav-tabs" id="tabs">
                                                <li class="active"><a class="tab1" data-toggle="tab" ng-click="filterTabCom('House')" href="#Firstone">House</a>
                                                </li>
                                                <li><a class="tab1" data-toggle="tab" ng-click="filterTabCom('Senate')" href="#Second">Senate</a>
                                                </li>
                                                <li><a class="tab1" data-toggle="tab" ng-click="filterTabCom('Joint')" href="#Third">Joint</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="padding:10px;">
                                                <div class="tab-pane active" id="Firstone">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                {{heading}}
                                                                <input style="float:right" type="text" ng-model="searchc1" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th >Chamber</th>
                                                                            <th>Committee ID</th>
                                                                            <th>Name</th>
                                                                            <th>Parent Committee</th>
                                                                            <th>Contact</th>
                                                                            <th>Office</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="c1" dir-paginate="result in results|orderBy:'committee_id'|filter:searchc1|itemsPerPage:10">
                                                                            <td>
                                                                                <button type="button" ng-click="addItemCom(result);" class="btn btn-default"><i class="fa"  ng-class="{'fa-star icon-f' : result.isFavoriteC , 'fa-star-o' : !result.isFavoriteC }" ></i></button>

                                                                            </td>
                                                                            <td><img ng-src="{{result.chamber == 'house' && 'images/h.png' || 'images/s.svg'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.committee_id}}</td>
                                                                            <td>{{result.name}}</td>
                                                                            <td>{{result.parent_committee_id == NULL && 'NA' || ''}} {{result.parent_committee_id}}</td>
                                                                            <td>{{result.phone == NULL && 'NA' || ''}} {{result.phone}}</td>
                                                                            <td>{{result.office == NULL && 'NA' || ''}} {{result.office}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-4 col-md-offset-4">
                                                                    <dir-pagination-controls max-size="9" pagination-id="c1" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="Second">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                {{heading}}
                                                                <input style="float:right" type="text" ng-model="searchc2" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th >Chamber</th>
                                                                            <th>Committee ID</th>
                                                                            <th>Name</th>
                                                                            <th>Parent Committee</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="c2" dir-paginate="result in results|filter:searchc2|itemsPerPage:10">
                                                                            <td>
                                                                                <button type="button" ng-click="addItemCom(result);" class="btn btn-default"><i class="fa fa-star-o" aria-hidden="true"></i>
                                                                                </button>
                                                                            </td>
                                                                            <td><img ng-src="{{result.chamber == 'house' && 'images/h.png' || 'images/s.svg'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.committee_id}}</td>
                                                                            <td>{{result.name}}</td>
                                                                            <td>{{result.parent_committee_id == NULL && 'NA' || ''}} {{result.parent_committee_id}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-4 col-md-offset-4">
                                                                    <dir-pagination-controls max-size="9" pagination-id="c2" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="Third">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                {{heading}}
                                                                <input style="float:right" type="text" ng-model="searchc3" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th >Chamber</th>
                                                                            <th>Committee ID</th>
                                                                            <th>Name</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr pagination-id="c3" dir-paginate="result in results|filter:searchc3|itemsPerPage:10">
                                                                            <td>
                                                                                <button type="button" ng-click="addItemCom(result);" class="btn btn-default"><i class="fa fa-star-o" aria-hidden="true"></i>
                                                                                </button>
                                                                            </td>
                                                                            <td><img ng-src="{{result.chamber == 'house' && 'images/h.png' || 'images/s.svg'}}" height="30px" width="30px" /> {{result.chamber}}</td>
                                                                            <td>{{result.committee_id}}</td>
                                                                            <td>{{result.name}}</td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-4 col-md-offset-4">
                                                                    <dir-pagination-controls max-size="9" pagination-id="c3" direction-links="true" boundary-links="true">
                                                                    </dir-pagination-controls>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="F" style="background-color:#f2f2ef;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="title" style="color:#4f4f4f;font-size:30px;">Favorites</h2>
                            <hr>
                            <div class="data" style="padding:5px;background-color: white;">
                                <ul class="nav nav-tabs" id="tabs">
                                    <li class="active"><a class="tab1" data-toggle="tab" ng-click="filterTabFav('Legislators')" href="#One">Legislators</a>
                                    </li>
                                    <li><a class="tab1" data-toggle="tab" ng-click="filterTabFav('Bills')" href="#Two">Bills</a>
                                    </li>
                                    <li><a class="tab1" data-toggle="tab" ng-click="filterTabFav('Committees')" href="#Three">Committees</a>
                                    </li>
                                </ul>
                                <div class="tab-content" style="padding:10px;">
                                    <div class="tab-pane fade in active" id="One">
                                        <div id="ismdb3" class="carousel slide" data-interval="false" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                Favorite {{heading}}

                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th>Image</th>
                                                                            <th>Party</th>
                                                                            <th>Name</th>
                                                                            <th>Chamber</th>
                                                                            <th>State</th>
                                                                            <th>Email</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr dir-paginate="fldata in favLegis|itemsPerPage:10">
                                                                            <td>
                                                                                <button type="button" ng-click="delItemLegis(fldata);" class="btn btn-default"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                                </button>
                                                                            </td>
                                                                            <td><img height="40px" width="40px" ng-src="https://theunitedstates.io/images/congress/original/{{fldata.bioguide_id}}.jpg"></td>
                                                                            <td><img ng-src="{{fldata.party == 'R' && 'images/r.png' || 'images/d.png'}}" height="30px" width="30px" /></td>
                                                                            <td>{{fldata.first_name}}, {{fldata.last_name}}</td>
                                                                            <td><img ng-src="{{fldata.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{fldata.chamber}}</td>
                                                                            <td>{{fldata.state_name}}</td>
                                                                            <td><a href="">{{fldata.oc_email}}</a></td>

                                                                            <td>
                                                                                <button type="button" href="#ismdb3" data-slide="next" ng-click="viewTaskinFav(fldata);" class="btn btn-primary btn-sm">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">

                                                  <table class="table">
                                                    <tbody>
                                                       <tr>
                                                         <td class="col-xs-1">
                                                           <a href="#ismdb3" data-slide-to="0">
                                                               <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> </button>
                                                           </a>
                                                           Details
                                                         </td>
                                                         <td class="col-xs-10">

                                                         </td>
                                                         <td class="col-xs-1">

                                                         </td>
                                                         <td >
                                                           <button type="button" ng-click="addItemLegis(record);" class="btn btn-default"><i class="fa fa-star-o" aria-hidden="true"></i>
                                                           </button>
                                                         </td>
                                                       </tr>
                                                    </tbody>
                                                  </table>

                                                    <hr>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td rowspan=5 colspan=2><img height="170px" width="150px" ng-src="https://theunitedstates.io/images/congress/original/{{fldataDetails.bioguide_id}}.jpg">
                                                                        </td>
                                                                        <td colspan=2>{{fldataDetails.title}} {{fldataDetails.last_name}} {{fldataDetails.first_name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan=2><a ng-click="javascript:window.open('mailto:{{fldataDetails.oc_email}}', 'Mail');event.preventDefault()" ng-href="mailto{{fldataDetails.oc_email}}">{{fldataDetails.oc_email}}</a>

                                                                      </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=2>Chamber:&nbsp;{{fldataDetails.chamber}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=2><a href="">Contact:&nbsp;{{fldataDetails.phone}}</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=2><img ng-src="{{fldataDetails.party == 'R' && 'images/r.png' || 'images/d.png'}}" height="30px" width="30px" />&nbsp;{{fldataDetails.party == 'R' && 'Republican' || 'Democrat'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <div><b>Start Term:</b>
                                                                            </div>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div>{{fldataDetails.term_start | date:'MMM d, y'}}</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <div><b>End Term:</b>
                                                                            </div>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div>{{fldataDetails.term_end | date:'MMM d, y'}}</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <div><b>Term:</b>
                                                                            </div>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                                                    40%
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <div><b>Office:</b>
                                                                            </div>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div>{{fldataDetails.office}}</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <div><b>State:</b>
                                                                            </div>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div>{{fldataDetails.state}}</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <div><b>Fax:</b>
                                                                            </div>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div><a>{{fldataDetails.fax}}</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <div><b>Birthday:</b>
                                                                            </div>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div>{{fldataDetails.birthday| date:'MMM d, y'}}</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan=1>
                                                                            <b>
                                                       Social Links:
                                                     </b>
                                                                        </td>
                                                                        <td colspan=3>
                                                                            <div>
                                                                                <a target="_blank" ng-href="https://www.facebook.com/{{fldataDetails.facebook_id}}"><img ng-src="images/f.png" height="30px" width="30px">
                                                                                </a>
                                                                                <a target="_blank" ng-href="https://www.twitter.com/{{fldataDetails.twitter_id}}"><img ng-src="images/t.png" height="30px" width="30px">
                                                                                </a>
                                                                                <a target="_blank" ng-href="{{fldataDetails.website}}"><img ng-src="images/w.png" height="30px" width="30px">
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            Committees
                                                            <table class="table  table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Chamber</th>
                                                                        <th>Committee ID</th>
                                                                        <th>Name</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr ng-repeat="committee in committees|limitTo:quantity">
                                                                        <td>{{committee.chamber}}</td>
                                                                        <td>{{committee.committee_id}}</td>
                                                                        <td>{{committee.name}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <br>
                                                            <table class="table  table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Bills ID</th>
                                                                        <th>title </th>
                                                                        <th>Chamber</th>
                                                                        <th>Bill Type</th>
                                                                        <th>Congress</th>
                                                                        <th>Link</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr ng-repeat="bill in bills|limitTo:quantity">
                                                                        <td>{{bill.bill_id}}</td>
                                                                        <td>{{bill.official_title}}</td>
                                                                        <td>{{bill.chamber}}</td>
                                                                        <td>{{bill.bill_type}}</td>
                                                                        <td>{{bill.congress}}</td>
                                                                        <td><a href="">Link</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="Two">
                                        <div id="ismdb4" class="carousel slide" data-interval="false" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="panel panel-default">
                                                        <div class="well">
                                                            <form class="form-inline">
                                                                <!-- <div class="form-group"> -->
                                                                Favorite {{heading}}
                                                                <input style="float:right" type="text" ng-model="search" class="selectpicker">
                                                                <!-- </div> -->
                                                            </form>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="bs-component">
                                                                <table class="table  table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th ></th>
                                                                            <th class="col-xs-1">Bill ID</th>
                                                                            <th class="col-xs-1">Bill Type</th>
                                                                            <th class="col-xs-4">Title</th>
                                                                            <th class="col-xs-2">Chamber</th>
                                                                            <th class="col-xs-2">Introduced on</th>
                                                                            <th class="col-xs-1">Sponsor</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr dir-paginate="fbdata in favBills|filter:search|itemsPerPage:10">
                                                                            <td>
                                                                                <button type="button" ng-click="delItemBill(fbdata);" class="btn btn-default"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                                </button>
                                                                            </td>
                                                                            <td>{{fbdata.bill_id}}</td>
                                                                            <td>{{fbdata.bill_type}}</td>
                                                                            <td>{{fbdata.official_title}}</td>
                                                                            <td><img ng-src="{{fbdata.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{fbdata.chamber}}</td>
                                                                            <td>{{fbdata.introduced_on}}</td>
                                                                            <td>{{fbdata.sponsor.first_name}} {{fbdata.sponsor.last_name}}</td>
                                                                            <td>
                                                                                <button type="button" href="#ismdb4" data-slide="next" ng-click="viewTaskinFav1(fbdata);" class="btn btn-primary btn-sm">View Details</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                  <table class="table">
                                                    <tbody>
                                                       <tr>
                                                         <td class="col-xs-1">
                                                           <a href="#ismdb4" data-slide-to="0">
                                                               <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> </button>
                                                           </a>
                                                           Details
                                                         </td>
                                                         <td class="col-xs-10">

                                                         </td>
                                                         <td class="col-xs-1">

                                                         </td>
                                                         <td >
                                                           <button type="button" ng-click="addItemBills(record);" class="btn btn-default"><i class="fa fa-star-o" aria-hidden="true"></i>
                                                           </button>
                                                         </td>
                                                       </tr>
                                                    </tbody>
                                                  </table>

                                                  <div class="col-lg-12">
                                                      <div class="col-lg-6">
                                                          <table class="table  table-hover">
                                                              <tbody>
                                                                  <tr>
                                                                      <tr>
                                                                          <td>Bill ID:</td>
                                                                          <td>{{fbdataDetails.bill_id}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Title</td>
                                                                          <td>{{fbdataDetails.official_title}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Bill Type</td>
                                                                          <td>{{fbdataDetails.bill_type}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Sponsor</td>
                                                                          <td>{{fbdataDetails.sponsor.first_name}} {{fbdataDetails.sponsor.last_name}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Chamber</td>
                                                                          <td>{{fbdataDetails.chamber}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Status</td>
                                                                          <td>{{fbdataDetails.state}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Introduced On</td>
                                                                          <td>{{fbdataDetails.introduced_on}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Congress URL</td>
                                                                          <td><a  target="_blank" ng-href="{{fbdataDetails.urls.congress}}">URL</a>
                                                                          </td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Version Status</td>
                                                                          <td>{{fbdataDetails.last_version.bill_version_id}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>Bill URL</td>
                                                                          <td><a  target="_blank" ng-href="{{fbdataDetails.last_version.urls.pdf}}">Link</a>
                                                                          </td>
                                                                      </tr>
                                                                  </tr>
                                                              </tbody>
                                                          </table>
                                                      </div>
                                                      <div id ="pdfspace" class="col-lg-6">
                                                          <object ng-attr-data="{{fbdataDetails.last_version.urls.pdf}}" type="application/pdf" height="100%%" width="100%"></object>
                                                          <br>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="Three">
                                        <div class="panel panel-default">
                                            <div class="well">
                                                <form class="form-inline">
                                                    <!-- <div class="form-group"> -->
                                                    Favorite {{heading}}
                                                    <input style="float:right" type="text" ng-model="search" class="selectpicker">
                                                    <!-- </div> -->
                                                </form>
                                            </div>
                                            <div class="table-responsive">
                                                <div class="bs-component">
                                                    <table class="table  table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Chamber</th>
                                                                <th>Committee ID</th>
                                                                <th>Name</th>
                                                                <th>Parent Committee</th>
                                                                <th>Contact</th>
                                                                <th>Office</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr dir-paginate="fcdata in favCom|itemsPerPage:30">
                                                                <td>
                                                                    <button type="button" ng-click="delItemCom(fcdata);" class="btn btn-default"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                                <td><img ng-src="{{fcdata.chamber == 'senate' && 'images/s.svg' || 'images/h.png'}}" height="30px" width="30px" /> {{fcdata.chamber}}</td>
                                                                <td>{{fcdata.committee_id}}</td>
                                                                <td>{{fcdata.name}}</td>
                                                                <td>{{fcdata.parent_committee_id}}</td>
                                                                <td>{{fcdata.phone}}</td>
                                                                <td>{{fcdata.office}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</html>
