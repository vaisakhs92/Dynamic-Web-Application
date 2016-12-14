var app = angular.module('myApp', ['angularUtils.directives.dirPagination']);
app.controller('mainData', function($scope, $http, $filter, $rootScope) {
    $rootScope.favComs = [];
    $rootScope.favLegi = [];
    $rootScope.favBill = [];


    $http({
        method: 'POST',
        url: "compute.php",
        data: $.param({
            'data': 'legisdata'
        }),
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
    }).success(function(data) {


      var favItems = JSON.parse(localStorage.getItem('LegisArray')) || [];
      for (var i = 0; i < favItems.length; i++) {
          if (!$rootScope.favLegi.includes(favItems[i].bioguide_id)) {
              $rootScope.favLegi.push(favItems[i].bioguide_id);
          }
      }

      for (var i = 0; i < data.results.length; ++i) {
          if ($rootScope.favLegi.includes(data.results[i].bioguide_id)) {
              data.results[i].isFavoriteL = true;
          } else {
              data.results[i].isFavoriteL = false;
          }
      }

        $scope.results = data.results;
        $scope.results2 = data.results;
        $scope.heading = "state";
    });
    $scope.filterTabLeg = function(id) {
        $scope.results = $filter('filter')($scope.results2, id);
        if (id == " ")
            id = " state";
        $scope.heading = id;
    };

    $scope.viewTask = function(record) {



        var date1 = record.term_start;
        var date2 = record.term_end;
        var date3 = new Date();
        date1 = date1.split('-');
        date2 = date2.split('-');
        date1 = new Date(date1[0], date1[1], date1[2]);
        date2 = new Date(date2[0], date2[1], date2[2]);
        var pdate = (date3 - date1) / (date2 - date3) * 100;
        pdate = Math.floor(pdate);
        $scope.progressvalue = pdate;
        $scope.record = record;
        $http({
            method: 'POST',
            url: "compute.php",
            data: $.param({
                'data': 'committees',
                'id': record.bioguide_id
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
        }).success(function(c_data) {
            $scope.committees = c_data.results;
            $scope.quantity = 5;
            $http({
                method: 'POST',
                url: "compute.php",
                data: $.param({
                    'data': 'bills',
                    'id': record.bioguide_id
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
            }).success(function(b_data) {
                $scope.bills = b_data.results;
                $scope.quantity = 5;
            });
        });
    };




    $scope.filterMain = function(id) {
        if (id == "legismain") {
            $http({
                method: 'POST',
                url: "compute.php",
                data: $.param({
                    'data': 'legisdata'
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
            }).success(function(data) {
              var favItems = JSON.parse(localStorage.getItem('LegisArray')) || [];
              for (var i = 0; i < favItems.length; i++) {
                  if (!$rootScope.favLegi.includes(favItems[i].bioguide_id)) {
                      $rootScope.favLegi.push(favItems[i].bioguide_id);
                  }
              }

              for (var i = 0; i < data.results.length; ++i) {
                  if ($rootScope.favLegi.includes(data.results[i].bioguide_id)) {
                      data.results[i].isFavoriteL = true;
                  } else {
                      data.results[i].isFavoriteL = false;
                  }
              }


                $scope.results = data.results;
                $scope.results2 = data.results;
                $scope.heading = "state";
            });
            $scope.filterTabLeg = function(id) {
                $scope.results = $filter('filter')($scope.results2, id);
                if (id == " ")
                    id = " state";
                $scope.heading = id;
            };
            ``
            $scope.viewTask = function(record) {

                $scope.record = record;
                var date1 = record.term_start;
                var date2 = record.term_end;
                var date3 = new Date();
                date1 = date1.split('-');
                date2 = date2.split('-');
                date1 = new Date(date1[0], date1[1], date1[2]);
                date2 = new Date(date2[0], date2[1], date2[2]);
                var pdate = (date3 - date1) / (date2 - date3) * 10;
                pdate = Math.floor(pdate);
                $scope.progressvalue = pdate;
                console.log("date is");
                console.log(pdate);
                console.log($scope.progressvalue);
                $http({
                    method: 'POST',
                    url: "compute.php",
                    data: $.param({
                        'data': 'committees',
                        'id': record.bioguide_id
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                }).success(function(c_data) {
                    $scope.committees = c_data.results;
                    $scope.quantity = 5;
                    $http({
                        method: 'POST',
                        url: "compute.php",
                        data: $.param({
                            'data': 'bills',
                            'id': record.bioguide_id
                        }),
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                    }).success(function(b_data) {
                        $scope.bills = b_data.results;
                        $scope.quantity = 5;
                    });
                });
            };
        }
        if (id == "billmain") {
            console.log("billmain");
            $http({
                method: 'POST',
                url: "compute.php",
                data: $.param({
                    'data': 'billdata'
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
            }).success(function(data) {

              var favItems = JSON.parse(localStorage.getItem('BillsArray')) || [];
              for (var i = 0; i < favItems.length; i++) {
                  if (!$rootScope.favBill.includes(favItems[i].bill_id)) {
                      $rootScope.favBill.push(favItems[i].bill_id);
                  }
              }

              for (var i = 0; i < data.results.length; ++i) {
                  if ($rootScope.favLegi.includes(data.results[i].bill_id)) {
                      data.results[i].isFavoriteB = true;
                  } else {
                      data.results[i].isFavoriteB = false;
                  }
              }
                $scope.heading = "Active";
                $scope.results2 = data.results;
                console.log($scope.results2);
                $scope.results = $filter('filter')($scope.results2, "true");
                $scope.filterTabBill = function(id) {
                    if (id == "Active") {
                        $scope.results = $filter('filter')($scope.results2, "true");
                    } else {
                        $scope.results = $filter('filter')($scope.results2, "false");
                    }
                    $scope.heading = id;
                };
            });
            $scope.viewTask1 = function(record) {
                $scope.record = record;
            };
        }
        if (id == "commain") {
            $http({
                method: 'POST',
                url: "compute.php",
                data: $.param({
                    'data': 'comdata'
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
            }).success(function(data) {

                var favItems = JSON.parse(localStorage.getItem('CommArray')) || [];
                for (var i = 0; i < favItems.length; i++) {
                    if (!$rootScope.favComs.includes(favItems[i].committee_id)) {
                        $rootScope.favComs.push(favItems[i].committee_id);
                    }
                }

                for (var i = 0; i < data.results.length; ++i) {
                    if ($rootScope.favComs.includes(data.results[i].committee_id)) {
                        data.results[i].isFavoriteC = true;
                    } else {
                        data.results[i].isFavoriteC = false;
                    }
                }


                $scope.heading = "House";
                $scope.results2 = data.results;
                $scope.results = $filter('filter')($scope.results2, "House");
                $scope.filterTabCom = function(id) {
                    $scope.results = $filter('filter')($scope.results2, id);
                    $scope.heading = id;
                };
            });
        }
        if (id == "favmain") {
            $scope.heading = "Legislators";
            $scope.favCom = JSON.parse(localStorage.getItem('CommArray'));
            $scope.favLegis = JSON.parse(localStorage.getItem('LegisArray'));
            $scope.favBills = JSON.parse(localStorage.getItem('BillsArray'));
            //console.log($scope.favCom);
        }
    };

    $scope.filterTabFav = function(id) {
        $scope.heading = id;
    };

    $scope.viewTaskinFav1 = function(fbdataDetails) {
        $scope.fbdataDetails = fbdataDetails;
        console.log($scope.fbdataDetails);
    };

    $scope.viewTaskinFav = function(fldataDetails) {
        $scope.fldataDetails = fldataDetails;
        $http({
            method: 'POST',
            url: "compute.php",
            data: $.param({
                'data': 'committees',
                'id': fldataDetails.bioguide_id
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
        }).success(function(c_data) {
            $scope.committees = c_data.results;
            $scope.quantity = 5;
            $http({
                method: 'POST',
                url: "compute.php",
                data: $.param({
                    'data': 'bills',
                    'id': fldataDetails.bioguide_id
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
            }).success(function(b_data) {
                $scope.bills = b_data.results;
                $scope.quantity = 5;
            });
        });
    };

    $scope.addItemLegis = function(record) {
      if (record.isFavoriteL == false) {
          record.isFavoriteL = true;
      } else if (record.isFavoriteL == true) {
          record.isFavoriteL = false;
          $scope.delItemLegis(record);
          return;
      } else {
          record.isFavoriteL = false;
      }
        var dupli = false;
        var favItems = JSON.parse(localStorage.getItem('LegisArray')) || [];
        for (var i = 0; i < favItems.length; i++) {
          if (!$rootScope.favLegi.includes(favItems[i].bioguide_id)) {
              $rootScope.favLegi.push(favItems[i].bioguide_id);
          }
            if (favItems[i].bioguide_id == record.bioguide_id) {
                dupli = true;
            }
        }
        if (dupli == false) {
            favItems.push(record);
        }
        localStorage.setItem('LegisArray', JSON.stringify(favItems));
    };
    $scope.addItemBills = function(record) {
      if (record.isFavoriteB == false) {
          record.isFavoriteB = true;
      } else if (record.isFavoriteB == true) {
          record.isFavoriteB = false;
          $scope.delItemBill(record);
          return;
      } else {
          record.isFavoriteB = false;
      }
        var dupli = false;
        var favItems = JSON.parse(localStorage.getItem('BillsArray')) || [];
        for (var i = 0; i < favItems.length; i++) {
          if (!$rootScope.favBill.includes(favItems[i].bill_id)) {
              $rootScope.favBill.push(favItems[i].bill_id);
          }
            if (favItems[i].bill_id == record.bill_id) {
                dupli = true;
            }
        }
        if (dupli == false) {
            favItems.push(record);
        }
        localStorage.setItem('BillsArray', JSON.stringify(favItems));
    };
    $scope.addItemCom = function(record) {
        if (record.isFavoriteC == false) {
            record.isFavoriteC = true;
        } else if (record.isFavoriteC == true) {
            record.isFavoriteC = false;
            $scope.delItemCom(record);
            return;
        } else {
            record.isFavoriteC = false;
        }
        var dupli = false;
        var favItems = JSON.parse(localStorage.getItem('CommArray')) || [];
        for (var i = 0; i < favItems.length; i++) {
            if (!$rootScope.favComs.includes(favItems[i].committee_id)) {
                $rootScope.favComs.push(favItems[i].committee_id);
            }
            if (favItems[i].committee_id == record.committee_id) {
                dupli = true;
            }
        }
        if (dupli == false) {
            favItems.push(record);
        }
        localStorage.setItem('CommArray', JSON.stringify(favItems));
    };
    $scope.delItemCom = function(record) {
        var storedAddresses = JSON.parse(localStorage.getItem('CommArray'));
        for (var i = 0; i < storedAddresses.length; i++) {
            if (storedAddresses[i].committee_id == record.committee_id) {
                storedAddresses.splice(i, 1);
                $rootScope.favComs.splice(i, 1);
            }
        }
        localStorage.setItem('CommArray', JSON.stringify(storedAddresses));
        $scope.favCom = JSON.parse(localStorage.getItem('CommArray'));
    };
    $scope.delItemBill = function(record) {
        var storedAddresses = JSON.parse(localStorage.getItem('BillsArray'));
        for (var i = 0; i < storedAddresses.length; i++) {
            if (storedAddresses[i].bill_id == record.bill_id) {
                storedAddresses.splice(i, 1);
                  $rootScope.favBill.splice(i, 1);
            }
        }
        localStorage.setItem('BillsArray', JSON.stringify(storedAddresses));
        $scope.favBills = JSON.parse(localStorage.getItem('BillsArray'));
    };
    $scope.delItemLegis = function(record) {
        var storedAddresses = JSON.parse(localStorage.getItem('LegisArray'));
        for (var i = 0; i < storedAddresses.length; i++) {
            if (storedAddresses[i].bioguide_id == record.bioguide_id) {
                storedAddresses.splice(i, 1);
                $rootScope.favLegi.splice(i, 1);
            }
        }
        localStorage.setItem('LegisArray', JSON.stringify(storedAddresses));
        $scope.favLegis = JSON.parse(localStorage.getItem('LegisArray'));
    };
});


$(function() {
    $("#tabs a:first").tab('show');
});

$(function() {
    $('.nav-tabs a').on('click', function(e) {
        e.preventDefault();
        console.log("test");
        $(this).tab('show');
    });

});
