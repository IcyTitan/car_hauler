(function () {
    'use strict';
    var yandexMap;
    let fullscreen;
    const mapElement = document.createElement('div');
    var screenWidth = window.innerWidth;
    mapElement.setAttribute('id', 'main-map');
    if (screenWidth <= 980) {
        fullscreen = true;
    }else{
        fullscreen = false;
    }
    window.addEventListener("resize", () => {
        mapContainerInit()
    });
    ymaps.ready(() => {
        mapContainerInit()
    });

    function mapContainerInit() {
        screenWidth = window.innerWidth;
        if (screenWidth <= 980 && fullscreen) {
            if (yandexMap) {
                yandexMap.destroy();
            }
            let mapContainer = document.querySelector('.map-mobile');
            mapContainer.append(mapElement);
            fullscreen = false;
            console.log("не");
            mapInit();
        } else if (screenWidth > 980 && !fullscreen) {
            if (yandexMap) {
                yandexMap.destroy();
            }
            let mapContainer = document.querySelector('.map');
            mapContainer.append(mapElement);
            fullscreen = true;
            console.log("да");
            mapInit();
        }
    }
    function setActiveButton(buttons, activeButton) {
        buttons.forEach((button) => {
            button.classList.remove("active");
        });
        activeButton.classList.add("active");
    }
    function setActiveTab(tabs, activeTabId) {
        tabs.forEach((tab) => {
            tab.classList.remove("show");
        });
        let activeTab = document.getElementById(activeTabId);
        if(activeTab) {
            activeTab.classList.add("show");
        }
    }
    function mapInit() {
        let buttons = [];
        let tabs = [];
        let setMapPosition = (x, y) => {
            yandexMap.setCenter([x, y]);
            let placemark = new ymaps.Placemark([x, y]);
            yandexMap.geoObjects.add(placemark);
        }
        buttons = document.querySelectorAll('.map-tabs>li');
        tabs =  document.querySelectorAll('.map-tab');
        setActiveButton(buttons,buttons[0]);
        setActiveTab(tabs, buttons[0].getAttribute('tab-id'))
        let initPoint = {
            'x': buttons[0].getAttribute('x'),
            'y': buttons[0].getAttribute('y'),
        };
        buttons.forEach((button) => {
            button.onclick = () => {
                setActiveButton(buttons,button);
                setActiveTab(tabs, button.getAttribute('tab-id'))
                setMapPosition(
                    button.getAttribute('x'),
                    button.getAttribute('y'),
                )
            }
        });


        yandexMap = new ymaps.Map('main-map', {
            center: [initPoint.x, initPoint.y],
            zoom: 9
        });
        setMapPosition(
            initPoint.x,
            initPoint.y,
        )
    }
}());