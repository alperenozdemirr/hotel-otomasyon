httpServices.controller('RoomController', function ($scope, $http, authService){
    $http({
        method:"GET",
        url:baseApiUrl+"/rooms/"+roomId
    }).then(function (response){
        console.log(response.data.room);
        $scope.room=response.data.room;
    }).catch(function (response){
        console.log("no room data");
    });

});
httpServices.controller('RoomsController', function ($scope, $http, authService){
    var pageNumber=0;
    var url = baseApiUrl + "/rooms";
    console.log(pageNumber);
    $scope.goToPage= function (number){
        pageNumber = number;
        url = (pageNumber === 0) ? baseApiUrl+"/rooms" : baseApiUrl+"/rooms?page="+pageNumber;
        $scope.roomAll(url);
    }
    $scope.roomAll= function (valueUrl){
        $http({
            method:"GET",
            url:valueUrl
        }).then(function (response){
            $scope.rooms=response.data.rooms.data;
            $scope.paginateCount=response.data.rooms.last_page;
            $scope.paginateNextUrl=response.data.rooms.next_page_url;
            $scope.paginatePrevUrl=response.data.rooms.prev_page_url;
        }).catch(function (response){
            console.log("no room data");
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
