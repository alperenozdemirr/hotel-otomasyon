httpServices.controller('RoomController', function ($scope, $http, authService){
    loaderShow();
    $scope.room= function (){
        $http({
            method:"GET",
            url:baseApiUrl+"/rooms/"+roomId
        }).then(function (response){
            console.log(response.data.room);
            $scope.room=response.data.room;
            loaderHide();
        }).catch(function (response){
            console.log("no room data");
            loaderHide();
        });
    }
    try {
        $scope.room();
    }catch (e){
        $scope.room();
    }


});
httpServices.controller('RoomsController', function ($scope, $http, authService){
    var pageNumber=0;
    var url = baseApiUrl + "/rooms";
    $scope.goToPage= function (number){
        pageNumber = number;
        url = (pageNumber === 0) ? baseApiUrl+"/rooms" : baseApiUrl+"/rooms?page="+pageNumber;
        $scope.roomAll(url);
    }
    $scope.roomAll= function (valueUrl){
        loaderShow();
        $http({
            method:"GET",
            url:valueUrl
        }).then(function (response){
            $scope.rooms=response.data.rooms.data;
            $scope.paginateCount=response.data.rooms.last_page;
            $scope.paginateNextUrl=response.data.rooms.next_page_url;
            $scope.paginatePrevUrl=response.data.rooms.prev_page_url;
            loaderHide();
        }).catch(function (response){
            console.log("no room data");
            loaderHide();
        });

    }
    $scope.roomAll(url);
    $scope.nextPage = function (nextUrl){
        if (nextUrl !== null){
            $scope.roomAll(nextUrl);
        }
    }
    $scope.prevPage = function (prevUrl){
        if (prevUrl !== null) {
            $scope.roomAll(prevUrl);
        }
    }
});
