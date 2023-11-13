<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Kegiatan TI-1D</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Work Sans', sans-serif;
        }
        
        .hero {
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #6ac1c5, #bda5ff);
            position: relative;
        }
        
        #calendar {
            width: 86%;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .midnight-blue {
            -webkit-box-shadow: 0 10px 50px -20px rgba(19, 31, 51, .65);
            box-shadow: 0 10px 50px -20px rgba(19, 31, 51, .65);
            border: 2px solid #222831;
            color: #EEE
        }
        
        .midnight-blue .calendar-sidebar {
            background: #222831;
            border-right: 2px solid #222831;
            -webkit-box-shadow: 0 0 18px -3px rgba(0, 0, 0, .65);
            box-shadow: 0 0 18px -3px rgba(0, 0, 0, .65)
        }
        
        .midnight-blue.sidebar-hide .calendar-sidebar {
            -webkit-box-shadow: none;
            box-shadow: none
        }
        
        .midnight-blue .calendar-sidebar>.month-list::-webkit-scrollbar-thumb:hover {
            background: #cee1ff
        }
        
        .midnight-blue .calendar-sidebar>.month-list>.calendar-months>li {
            text-transform: uppercase
        }
        
        .midnight-blue .calendar-sidebar>.month-list>.calendar-months>li:hover {
            background-color: rgba(255, 255, 255, .2)
        }
        
        .midnight-blue .calendar-sidebar>.month-list>.calendar-months>li.active-month {
            background-color: #00adb5;
            font-weight: 600
        }
        
        .midnight-blue .calendar-sidebar>span#sidebarToggler,
        .midnight-blue #eventListToggler {
            background-color: #222831;
            -webkit-box-shadow: 0 0 18px -3px rgba(0, 0, 0, .65);
            box-shadow: 0 0 18px -3px rgba(0, 0, 0, .65)
        }
        
        .midnight-blue .calendar-sidebar>span#sidebarToggler {
            right: -2px
        }
        
        .midnight-blue button.icon-button>span.bars {
            background-color: #00adb5
        }
        
        .midnight-blue button.icon-button>span.bars::before {
            background-color: #12cbd4
        }
        
        .midnight-blue button.icon-button>span.bars::after {
            background-color: #027e84
        }
        
        .midnight-blue .calendar-sidebar>.calendar-year>button.icon-button>span,
        .midnight-blue button.icon-button>span.chevron-arrow-right {
            display: block;
            border-right: 6px solid #00adb5;
            border-bottom: 6px solid #027e84
        }
        
        .midnight-blue .calendar-sidebar>.calendar-year>button.icon-button>span {
            border-width: 4px
        }
        
        .midnight-blue .calendar-inner {
            background-color: #393e46;
            -webkit-box-shadow: 5px 0 18px -3px rgba(0, 0, 0, .35);
            box-shadow: 5px 0 18px -3px rgba(0, 0, 0, .35)
        }
        
        .midnight-blue .calendar-inner td {
            color: #fff
        }
        
        .midnight-blue th[colspan="7"] {
            position: relative;
            font-size: 12px;
            color: #00adb5
        }
        
        .midnight-blue th[colspan="7"]::after {
            content: '';
            display: block;
            width: 92%;
            height: 1px;
            margin: 0 auto;
            background: #027e84
        }
        
        .midnight-blue tr.calendar-body .calendar-day .day:hover {
            background-color: rgba(255, 255, 255, .12);
            color: #00f4ff
        }
        
        .midnight-blue tr.calendar-body .calendar-day .day.calendar-today {
            background: #00adb5
        }
        
        .midnight-blue tr.calendar-body .calendar-day .day {
            border-width: 2px;
            border-radius: 0;
            color: #fff
        }
        
        .midnight-blue tr.calendar-body .calendar-day .day.calendar-active,
        .midnight-blue tr.calendar-body .calendar-day .day.calendar-active:hover {
            border-color: #EEE;
            color: #EEE
        }
        
        .midnight-blue tr.calendar-body .calendar-day .day.calendar-today:hover {
            color: #EEE
        }
        
        .midnight-blue .calendar-events {
            background-color: #192435;
            padding: 70px 20px 60px 20px
        }
        
        .midnight-blue .calendar-events::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 5px
        }
        
        .midnight-blue .calendar-events::-webkit-scrollbar-thumb:hover {
            background: #cee1ff
        }
        
        .midnight-blue .calendar-events p {
            color: #EEE
        }
        
        .midnight-blue .calendar-inner::after {
            background-color: rgba(25, 36, 53, .65)
        }
        
        .midnight-blue .event-container {
            border-radius: 0
        }
        
        .midnight-blue .event-container:hover {
            background-color: #5d6979
        }
        
        .midnight-blue .event-container>.event-icon>div {
            border: 2px solid transparent
        }
        
        .midnight-blue .event-container:hover>.event-icon>div {
            border-color: #fff
        }
        
        .midnight-blue .event-container>.event-icon>div.event-bullet-birthday,
        .midnight-blue .event-indicator>.type-bullet>div.type-birthday {
            background-color: #6c72bf
        }
        
        .midnight-blue .event-container>.event-info>p.event-title>span {
            color: #fff;
            border-radius: 0;
            background-color: rgba(0, 173, 181, .15);
            border: 1px solid #00adb5
        }
        
        .midnight-blue .event-container:hover>.event-info>p.event-title>span {
            background-color: rgb(0 173 181)
        }
        
        .midnight-blue .event-list>.event-empty {
            background-color: rgba(0, 173, 181, .15);
            border: 1px solid #00adb5
        }
        
        .midnight-blue .event-list>.event-empty>p {
            color: #fff
        }
        
        @media only screen and (max-width:768px) {
            .midnight-blue .event-indicator {
                -webkit-transform: translate(-50%, -100%);
                -ms-transform: translate(-50%, -100%);
                transform: translate(-50%, -100%)
            }
            .midnight-blue .calendar-events {
                -webkit-box-shadow: -5px 0 18px -3px rgba(0, 0, 0, .65);
                box-shadow: -5px 0 18px -3px rgba(0, 0, 0, .65)
            }
            .midnight-blue.event-hide .calendar-events {
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }
        
        @media screen and (max-width:425px) {
            .midnight-blue .calendar-sidebar {
                border-right: none
            }
            .midnight-blue .calendar-sidebar>.calendar-year {
                background-color: #222831;
                -webkit-box-shadow: 0 3px 8px -3px rgba(0, 0, 0, .65);
                box-shadow: 0 3px 8px -3px rgba(0, 0, 0, .65)
            }
            .midnight-blue .calendar-sidebar>.month-list {
                background-color: #192435
            }
            .midnight-blue .calendar-sidebar>span#sidebarToggler {
                right: 0
            }
            .midnight-blue #eventListToggler,
            .midnight-blue .calendar-sidebar>span#sidebarToggler {
                -webkit-box-shadow: none;
                box-shadow: none
            }
            .midnight-blue .calendar-inner {
                -webkit-box-shadow: 5px 0 18px -3px rgba(0, 0, 0, .35);
                box-shadow: 0 5px 18px -3px rgba(0, 0, 0, .65)
            }
            .midnight-blue tr.calendar-body .calendar-day .day.calendar-active,
            .midnight-blue tr.calendar-body .calendar-day .day.calendar-active:hover {
                border-width: 1px
            }
            .midnight-blue tr.calendar-body .calendar-day .day.calendar-today .event-indicator {
                -webkit-transform: translate(-50%, 3px);
                -ms-transform: translate(-50%, 3px);
                transform: translate(-50%, 3px)
            }
            .midnight-blue tr.calendar-body .calendar-day .day.calendar-active .event-indicator {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%)
            }
            .midnight-blue .event-indicator {
                -webkit-transform: translate(-50%, 0);
                -ms-transform: translate(-50%, 0);
                transform: translate(-50%, 0)
            }
            .midnight-blue .calendar-events {
                padding: 20px 15px
            }
            .midnight-blue.event-hide .calendar-events {
                padding: 0 15px
            }
        }
        
        *,
         ::after,
         ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }
        
        html,
        body {
            padding: 0;
            margin: 0
        }
        
        input:focus,
        textarea:focus,
        button:focus {
            outline: none
        }
        
        .evo-calendar {
            position: relative;
            background-color: #fbfbfb;
            color: #5a5a5a;
            width: 100%;
            -webkit-box-shadow: 0 10px 50px -20px #8773c1;
            box-shadow: 0 10px 50px -20px #8773c1;
            margin: 0 auto;
            overflow: hidden;
            z-index: 1
        }
        
        .calendar-sidebar {
            position: absolute;
            margin-top: 0;
            width: 200px;
            height: 100%;
            float: left;
            background-color: #8773c1;
            color: #fff;
            z-index: 1;
            -webkit-box-shadow: 5px 0 18px -3px #8773c1;
            box-shadow: 5px 0 18px -3px #8773c1;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            z-index: 2
        }
        
        .sidebar-hide .calendar-sidebar {
            -webkit-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-box-shadow: none;
            box-shadow: none
        }
        
        .calendar-sidebar>span#sidebarToggler {
            position: absolute;
            width: 40px;
            height: 40px;
            top: 0;
            right: 0;
            -webkit-transform: translate(100%, 0);
            -ms-transform: translate(100%, 0);
            transform: translate(100%, 0);
            background-color: #8773c1;
            padding: 10px 8px;
            cursor: pointer;
            -webkit-box-shadow: 5px 0 18px -3px #8773c1;
            box-shadow: 5px 0 18px -3px #8773c1
        }
        
        .calendar-sidebar>.calendar-year {
            padding: 20px;
            text-align: center
        }
        
        .calendar-sidebar>.calendar-year>p {
            font-size: 20px;
            display: inline-block
        }
        
        .calendar-sidebar>.calendar-year>button.icon-button {
            display: inline-block;
            width: 20px;
            height: 20px;
            overflow: visible
        }
        
        .calendar-sidebar>.calendar-year>button.icon-button>span {
            border-right: 4px solid #fff;
            border-bottom: 4px solid #fff;
            width: 100%;
            height: 100%
        }
        
        .calendar-sidebar>.calendar-year>img[year-val="prev"] {
            float: left
        }
        
        .calendar-sidebar>.calendar-year>img[year-val="next"] {
            float: right
        }
        
        .calendar-sidebar>.month-list::-webkit-scrollbar {
            width: 5px;
            height: 5px
        }
        
        .calendar-sidebar>.month-list::-webkit-scrollbar-track {
            background: transparent
        }
        
        .calendar-sidebar>.month-list::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 5px
        }
        
        .calendar-sidebar>.month-list::-webkit-scrollbar-thumb:hover {
            background: #d6c8ff
        }
        
        .calendar-sidebar>.month-list>.calendar-months {
            list-style-type: none;
            margin: 0;
            padding: 0
        }
        
        .calendar-sidebar>.month-list>.calendar-months>li {
            padding: 7px 30px;
            cursor: pointer;
            font-size: 14px
        }
        
        .calendar-sidebar>.month-list>.calendar-months>li:hover {
            background-color: #a692e0
        }
        
        .calendar-sidebar>.month-list>.calendar-months>li.active-month {
            background-color: #755eb5
        }
        
        .calendar-inner {
            position: relative;
            padding: 40px 30px;
            float: left;
            width: 100%;
            max-width: calc(100% - 600px);
            margin-left: 200px;
            background-color: #fff;
            -webkit-box-shadow: 5px 0 18px -3px rgba(0, 0, 0, .15);
            box-shadow: 5px 0 18px -3px rgba(0, 0, 0, .15);
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
            z-index: 1
        }
        
        .calendar-inner::after {
            content: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(83, 74, 109, .5)
        }
        
        .sidebar-hide .calendar-inner {
            max-width: calc(100% - 400px);
            margin-left: 0
        }
        
        .event-hide .calendar-inner {
            max-width: calc(100% - 200px)
        }
        
        .event-hide.sidebar-hide .calendar-inner {
            max-width: 100%
        }
        
        .calendar-inner .calendar-table {
            border-collapse: collapse;
            font-size: 12px;
            width: 100%;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
        
        th[colspan="7"] {
            position: relative;
            text-align: center;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 18px;
            color: #8773c1
        }
        
        th[colspan="7"]::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            width: 50px;
            height: 5px;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            background-color: rgba(135, 115, 193, .15)
        }
        
        tr.calendar-header .calendar-header-day {
            padding: 10px;
            text-align: center;
            color: #5a5a5a
        }
        
        tr.calendar-body .calendar-day {
            padding: 10px 0
        }
        
        tr.calendar-body .calendar-day .day {
            position: relative;
            padding: 15px;
            height: 60px;
            width: 60px;
            margin: 0 auto;
            border-radius: 50%;
            text-align: center;
            color: #5a5a5a;
            border: 1px solid transparent;
            -webkit-transition: all .3s ease, -webkit-transform .5s ease;
            transition: all .3s ease, -webkit-transform .5s ease;
            -o-transition: all .3s ease, transform .5s ease;
            transition: all .3s ease, transform .5s ease;
            transition: all .3s ease, transform .5s ease, -webkit-transform .5s ease;
            cursor: pointer
        }
        
        tr.calendar-body .calendar-day .day:hover {
            background-color: #dadada
        }
        
        tr.calendar-body .calendar-day .day:active {
            -webkit-transform: scale(.9);
            -ms-transform: scale(.9);
            transform: scale(.9)
        }
        
        tr.calendar-body .calendar-day .day.calendar-active,
        tr.calendar-body .calendar-day .day.calendar-active:hover {
            color: #5a5a5a;
            border-color: rgba(0, 0, 0, .5)
        }
        
        tr.calendar-body .calendar-day .day.calendar-today {
            color: #fff;
            background-color: #8773c1
        }
        
        tr.calendar-body .calendar-day .day.calendar-today:hover {
            color: #fff;
            background-color: #755eb5
        }
        
        tr.calendar-body .calendar-day .day[disabled] {
            pointer-events: none;
            cursor: not-allowed;
            background-color: transparent;
            color: #b9b9b9
        }
        
        .calendar-events {
            position: absolute;
            top: 0;
            right: 0;
            width: 400px;
            height: 100%;
            padding: 70px 30px 60px 30px;
            background-color: #fbfbfb;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
            overflow-y: auto;
            z-index: 0
        }
        
        .calendar-events::-webkit-scrollbar {
            width: 5px;
            height: 5px
        }
        
        .calendar-events::-webkit-scrollbar-track {
            background: transparent
        }
        
        .calendar-events::-webkit-scrollbar-thumb {
            background: #8e899c;
            border-radius: 5px
        }
        
        .calendar-events::-webkit-scrollbar-thumb:hover {
            background: #6c6875
        }
        
        .calendar-events>.event-header>p {
            font-size: 18px;
            font-weight: 600;
            color: #5a5a5a
        }
        
        #eventListToggler {
            position: absolute;
            width: 40px;
            height: 40px;
            top: 0;
            right: 0;
            background-color: #8773c1;
            padding: 10px;
            cursor: pointer;
            -webkit-box-shadow: 5px 0 18px -3px #8773c1;
            box-shadow: 5px 0 18px -3px #8773c1;
            z-index: 1
        }
        
        .event-list::after {
            content: "";
            clear: both;
            display: table
        }
        
        .event-list>.event-empty {
            padding: 15px 10px;
            background-color: rgba(135, 115, 193, .15);
            border: 1px solid #8773c1
        }
        
        .event-list>.event-empty>p {
            margin: 0;
            color: #755eb5
        }
        
        .event-container {
            position: relative;
            display: flex;
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
            cursor: pointer;
            float: left
        }
        
        .event-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 100%;
            transform: translate(29px, 30px);
            background-color: #eaeaea;
            z-index: -1
        }
        
        .event-container:last-child.event-container::before {
            height: 30px;
            transform: translate(29px, 0)
        }
        
        .event-container:only-child.event-container::before {
            height: 0;
            opacity: 0
        }
        
        .event-container:hover {
            background-color: #fff;
            -webkit-box-shadow: 0 3px 12px -4px rgba(0, 0, 0, .65);
            box-shadow: 0 3px 12px -4px rgba(0, 0, 0, .65)
        }
        
        .event-container>.event-icon {
            position: relative;
            padding: 20px;
            width: 60px;
            height: 60px;
            float: left
        }
        
        .event-container>.event-icon>img {
            width: 30px
        }
        
        .event-container>.event-info {
            align-self: center;
            width: calc(100% - 60px);
            display: inline-block;
            padding: 10px 10px 10px 0
        }
        
        .event-container>.event-info>p {
            margin: 0;
            color: #5a5a5a
        }
        
        .event-container>.event-info>p.event-title {
            position: relative;
            font-size: 14px;
            font-weight: 600
        }
        
        .event-container>.event-info>p.event-title>span {
            position: absolute;
            top: 50%;
            right: 0;
            font-size: 12px;
            font-weight: 400;
            color: #755eb5;
            border: 1px solid #755eb5;
            border-radius: 3px;
            background-color: rgb(237 234 246);
            padding: 3px 6px;
            transform: translateY(-50%)
        }
        
        .event-container>.event-info>p.event-desc {
            font-size: 14px;
            margin-top: 5px
        }
        
        .event-indicator {
            position: absolute;
            width: -moz-max-content;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            top: 100%;
            left: 50%;
            -webkit-transform: translate(-50%, calc(-100% + -5px));
            -ms-transform: translate(-50%, calc(-100% + -5px));
            transform: translate(-50%, calc(-100% + -5px))
        }
        
        .event-indicator>.type-bullet {
            float: left;
            padding: 2px
        }
        
        .event-indicator>.type-bullet>div {
            width: 10px;
            height: 10px;
            border-radius: 50%
        }
        
        .event-container>.event-icon>div {
            width: 100%;
            height: 100%;
            border-radius: 50%
        }
        
        .event-container>.event-icon>div[class^="event-bullet-"],
        .event-indicator>.type-bullet>div[class^="type-"] {
            background-color: #8773c1
        }
        
        .event-container>.event-icon>div.event-bullet-event,
        .event-indicator>.type-bullet>div.type-event {
            background-color: #ff7575
        }
        
        .event-container>.event-icon>div.event-bullet-holiday,
        .event-indicator>.type-bullet>div.type-holiday {
            background-color: #ffc107
        }
        
        .event-container>.event-icon>div.event-bullet-birthday,
        .event-indicator>.type-bullet>div.type-birthday {
            background-color: #3ca8ff
        }
        
        button.icon-button {
            border: none;
            background-color: transparent;
            width: 100%;
            height: 100%;
            padding: 0;
            cursor: pointer
        }
        
        button.icon-button>span.bars {
            position: relative;
            width: 100%;
            height: 4px;
            display: block;
            background-color: #fff
        }
        
        button.icon-button>span.bars::before,
        button.icon-button>span.bars::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            display: block;
            background-color: #fff
        }
        
        button.icon-button>span.bars::before {
            top: -8px
        }
        
        button.icon-button>span.bars::after {
            bottom: -8px
        }
        
        button.icon-button>span.chevron-arrow-left {
            display: inline-block;
            border-right: 6px solid #fff;
            border-bottom: 6px solid #fff;
            width: 18px;
            height: 18px;
            -webkit-transform: rotate(-225deg);
            -ms-transform: rotate(-225deg);
            transform: rotate(-225deg)
        }
        
        button.icon-button>span.chevron-arrow-right {
            display: block;
            border-right: 4px solid #fff;
            border-bottom: 4px solid #fff;
            width: 16px;
            height: 16px;
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }
        
        @media screen and (max-width:1280px) {
            .calendar-inner {
                padding: 50px 20px 70px 20px;
                max-width: calc(100% - 580px)
            }
            .sidebar-hide .calendar-inner {
                max-width: calc(100% - 380px)
            }
            tr.calendar-header .calendar-header-day,
            tr.calendar-body .calendar-day {
                padding: 10px 5px
            }
            .calendar-events {
                width: 380px;
                padding: 70px 20px 60px 20px
            }
        }
        
        @media screen and (max-width:1024px) {
            .calendar-sidebar {
                width: 175px
            }
            .calendar-inner {
                padding: 50px 10px 70px 10px;
                max-width: calc(100% - 475px);
                margin-left: 175px
            }
            .sidebar-hide .calendar-inner {
                max-width: calc(100% - 300px)
            }
            .event-hide .calendar-inner {
                max-width: calc(100% - 175px)
            }
            .calendar-events {
                width: 300px;
                padding: 70px 10px 60px 10px
            }
            tr.calendar-body .calendar-day .day {
                padding: 10px;
                height: 45px;
                width: 45px;
                font-size: 12px
            }
            .event-indicator>.type-bullet>div {
                width: 8px;
                height: 8px;
                border-radius: 50%
            }
            .calendar-sidebar>span#sidebarToggler,
            #eventListToggler {
                width: 50px;
                height: 50px
            }
            #eventListToggler,
            .event-hide #eventListToggler {
                right: 0;
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0)
            }
            button.icon-button>span.bars {
                height: 5px
            }
            button.icon-button>span.bars::before,
            button.icon-button>span.bars::after {
                height: 5px
            }
            button.icon-button>span.bars::before {
                top: -10px
            }
            button.icon-button>span.bars::after {
                bottom: -10px
            }
            button.icon-button>span.chevron-arrow-right {
                border-right-width: 5px;
                border-bottom-width: 5px;
                width: 20px;
                height: 20px
            }
            .event-container::before {
                transform: translate(24px, 25px)
            }
            .event-container:last-child.event-container::before {
                height: 25px;
                transform: translate(24px, 0)
            }
            .event-container>.event-icon {
                padding: 15px;
                width: 50px;
                height: 50px
            }
            .event-container>.event-icon::before {
                left: 24px
            }
            .event-container>.event-info {
                width: calc(100% - 50px)
            }
            .event-container>.event-info>p {
                font-size: 14px
            }
        }
        
        @media screen and (max-width:991px) {
            .calendar-sidebar {
                width: 150px
            }
            .calendar-inner {
                padding: 50px 10px 70px 10px;
                max-width: calc(100% - 425px);
                margin-left: 150px
            }
            .sidebar-hide .calendar-inner {
                max-width: calc(100% - 275px)
            }
            .event-hide .calendar-inner {
                max-width: calc(100% - 150px)
            }
            .calendar-events {
                width: 275px;
                padding: 70px 10px 60px 10px
            }
        }
        
        @media screen and (max-width:768px) {
            .calendar-sidebar {
                width: 180px
            }
            .calendar-inner {
                padding: 50px 10px 70px 10px;
                max-width: 100%;
                margin-left: 0
            }
            .sidebar-hide .calendar-inner,
            .event-hide .calendar-inner {
                max-width: 100%
            }
            .calendar-inner::after {
                content: '';
                opacity: 1
            }
            .sidebar-hide.event-hide .calendar-inner::after {
                content: none;
                opacity: 0
            }
            .event-indicator {
                -webkit-transform: translate(-50%, calc(-100% + -3px));
                -ms-transform: translate(-50%, calc(-100% + -3px));
                transform: translate(-50%, calc(-100% + -3px))
            }
            .event-indicator>.type-bullet {
                padding: 0 1px 3px 1px
            }
            .calendar-events {
                width: 48%;
                padding: 70px 20px 60px 20px;
                -webkit-box-shadow: -5px 0 18px -3px rgba(135, 115, 193, .5);
                box-shadow: -5px 0 18px -3px rgba(135, 115, 193, .5);
                z-index: 1
            }
            .event-hide .calendar-events {
                -webkit-transform: translateX(100%);
                -ms-transform: translateX(100%);
                transform: translateX(100%);
                -webkit-box-shadow: none;
                box-shadow: none
            }
            #eventListToggler {
                right: 48%;
                -webkit-transform: translateX(100%);
                -ms-transform: translateX(100%);
                transform: translateX(100%)
            }
            .event-hide #eventListToggler {
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0)
            }
            .calendar-events>.event-list {
                margin-top: 20px
            }
            .calendar-sidebar>.calendar-year>button.icon-button {
                width: 16px;
                height: 16px
            }
            .calendar-sidebar>.calendar-year>button.icon-button>span {
                border-right-width: 2px;
                border-bottom-width: 2px
            }
            .calendar-sidebar>.calendar-year>p {
                font-size: 12px
            }
            .calendar-sidebar>.month-list>.calendar-months>li {
                padding: 6px 26px
            }
            .calendar-events>.event-header>p {
                margin: 0
            }
            .event-container>.event-info>p.event-title {
                font-size: 16px
            }
            .event-container>.event-info>p.event-desc {
                font-size: 12px
            }
        }
        
        @media screen and (max-width:768px) and (min-width:426px) {
            .event-container>.event-info>p.event-title {
                font-size: 12px
            }
        }
        
        @media screen and (max-width:425px) {
            .calendar-sidebar {
                width: 100%
            }
            .sidebar-hide .calendar-sidebar {
                height: 43px
            }
            .sidebar-hide .calendar-sidebar {
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0);
                -webkit-box-shadow: none;
                box-shadow: none
            }
            .calendar-sidebar>.calendar-year {
                position: relative;
                padding: 10px 20px;
                text-align: center;
                background-color: #8773c1;
                -webkit-box-shadow: 0 3px 8px -3px rgba(53, 43, 80, .65);
                box-shadow: 0 3px 8px -3px rgba(53, 43, 80, .65)
            }
            .calendar-sidebar>.calendar-year>button.icon-button {
                width: 14px;
                height: 14px
            }
            .calendar-sidebar>.calendar-year>button.icon-button>span {
                border-right-width: 3px;
                border-bottom-width: 3px
            }
            .calendar-sidebar>.calendar-year>p {
                font-size: 14px;
                margin: 0 10px
            }
            .calendar-sidebar>.month-list {
                position: relative;
                width: 100%;
                height: calc(100% - 43px);
                overflow-y: auto;
                background-color: #8773c1;
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
                z-index: -1
            }
            .sidebar-hide .calendar-sidebar>.month-list {
                -webkit-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                transform: translateY(-100%)
            }
            .calendar-sidebar>.month-list>.calendar-months {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                list-style-type: none;
                margin: 0;
                padding: 0;
                padding: 10px
            }
            .calendar-sidebar>.month-list>.calendar-months::after {
                content: "";
                clear: both;
                display: table
            }
            .calendar-sidebar>.month-list>.calendar-months>li {
                padding: 10px 20px;
                font-size: 14px
            }
            .calendar-sidebar>span#sidebarToggler {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                transform: translate(0, 0);
                top: 0;
                bottom: unset;
                -webkit-box-shadow: none;
                box-shadow: none
            }
            th[colspan="7"]::after {
                bottom: 0
            }
            .calendar-inner {
                margin-left: 0;
                padding: 53px 0 40px 0;
                float: unset
            }
            .calendar-inner::after {
                content: none;
                opacity: 0
            }
            .sidebar-hide .calendar-inner,
            .event-hide .calendar-inner,
            .calendar-inner {
                max-width: 100%
            }
            .calendar-sidebar>span#sidebarToggler,
            #eventListToggler {
                width: 40px;
                height: 40px
            }
            button.icon-button>span.chevron-arrow-right {
                border-right-width: 4px;
                border-bottom-width: 4px;
                width: 18px;
                height: 18px;
                -webkit-transform: translateX(-3px) rotate(-45deg);
                -ms-transform: translateX(-3px) rotate(-45deg);
                transform: translateX(-3px) rotate(-45deg)
            }
            button.icon-button>span.bars,
            button.icon-button>span.bars::before,
            button.icon-button>span.bars::after {
                height: 4px
            }
            button.icon-button>span.bars::before {
                top: -8px
            }
            button.icon-button>span.bars::after {
                bottom: -8px
            }
            tr.calendar-header .calendar-header-day {
                padding: 0
            }
            tr.calendar-body .calendar-day {
                padding: 8px 0
            }
            tr.calendar-body .calendar-day .day {
                padding: 10px;
                width: 40px;
                height: 40px;
                font-size: 12px
            }
            .event-indicator {
                -webkit-transform: translate(-50%, calc(-100% + -3px));
                -ms-transform: translate(-50%, calc(-100% + -3px));
                transform: translate(-50%, calc(-100% + -3px))
            }
            .event-indicator>.type-bullet {
                padding: 1px
            }
            .event-indicator>.type-bullet>div {
                width: 6px;
                height: 6px
            }
            .event-indicator {
                -webkit-transform: translate(-50%, 0);
                -ms-transform: translate(-50%, 0);
                transform: translate(-50%, 0)
            }
            tr.calendar-body .calendar-day .day.calendar-today .event-indicator,
            tr.calendar-body .calendar-day .day.calendar-active .event-indicator {
                -webkit-transform: translate(-50%, 3px);
                -ms-transform: translate(-50%, 3px);
                transform: translate(-50%, 3px)
            }
            .calendar-events {
                position: relative;
                padding: 20px 15px;
                width: 100%;
                height: 185px;
                -webkit-box-shadow: 0 5px 18px -3px rgba(0, 0, 0, .15);
                box-shadow: 0 5px 18px -3px rgba(0, 0, 0, .15);
                overflow-y: auto;
                z-index: 0
            }
            .event-hide .calendar-events {
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0);
                padding: 0 15px;
                height: 0
            }
            .calendar-events>.event-header>p {
                font-size: 12px
            }
            .event-list>.event-empty {
                padding: 10px
            }
            .event-container::before {
                transform: translate(21.5px, 25px)
            }
            .event-container:last-child.event-container::before {
                height: 22.5px;
                transform: translate(21.5px, 0)
            }
            .event-container>.event-icon {
                width: 45px;
                height: 45px
            }
            .event-container>.event-icon::before {
                left: 21px
            }
            .event-container:last-child>.event-icon::before {
                height: 50%
            }
            .event-container>.event-info {
                width: calc(100% - 45px)
            }
            .event-hide #eventListToggler,
            #eventListToggler {
                top: calc(100% - 185px);
                right: 0;
                -webkit-transform: translate(0, -100%);
                -ms-transform: translate(0, -100%);
                transform: translate(0, -100%)
            }
            .event-hide #eventListToggler {
                top: 100%
            }
            #eventListToggler button.icon-button>span.chevron-arrow-right {
                position: relative;
                display: inline-block;
                -webkit-transform: translate(0, -3px) rotate(45deg);
                -ms-transform: translate(0, -3px) rotate(45deg);
                transform: translate(0, -3px) rotate(45deg)
            }
        }
        
        @media screen and (max-width:375px) {
            th[colspan="7"] {
                font-size: 12px;
                padding-bottom: 5px
            }
            tr.calendar-header .calendar-header-day {
                font-size: 12px
            }
            tr.calendar-body .calendar-day .day {
                padding: 5px;
                width: 30px;
                height: 30px;
                font-size: 14px
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bpy-3 mb-3 bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../index.html">TI-1D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="kegiatan.html">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="prestasi.html">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="informasi.html">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Kalender.html">Kalender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="youtube.html">Youtube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="berita.html">Berita</a>
                    </li>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../auth/login.html">Login</a>
                    </li>
            </div>
        </div>
    </nav>
    <div class="hero"></div>
    <div id="calendar"></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#calendar').evoCalendar({
                calendarEvents: [{
                    id: ' Kegiatan TI-1D ',
                    name: "Sang Pemenang-Rizki ",
                    date: "June/22/2023",
                    description: "Sang Pemenang Semester Ini Rizki",
                    type: "Kegiatan",
                    everyYear: true
                }, {
                    name: "Tiga China Datang",
                    badge: "06/22 - 07/02",
                    date: ["Juni /22/2023", "Juli/03/2023"],
                    description: "Ingin menguasai Kelas TI-1D",
                    type: "Kegiatan",
                    color: "#63d867"
                }]
            });
        })
    </script>
    <script>
        ! function(e) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
        }(function(d) {
            "use strict";
            var i, r = window.EvoCalendar || {};
            i = 0, (r = function(e, t) {
                var a = this;
                if (a.defaults = {
                        theme: null,
                        format: "mm/dd/yyyy",
                        titleFormat: "MM yyyy",
                        eventHeaderFormat: "MMd, yyyy",
                        firstDayOfWeek: 0,
                        language: "en",
                        todayHighlight: !1,
                        sidebarDisplayDefault: !0,
                        sidebarToggler: !0,
                        eventDisplayDefault: !0,
                        eventListToggler: !0,
                        calendarEvents: null
                    }, a.options = d.extend({}, a.defaults, t), a.initials = {
                        default_class: d(e)[0].classList.value,
                        validParts: /dd?|DD?|mm?|MM?|yy(?:yy)?/g,
                        dates: {
                            en: {
                                days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
                                daysShort: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
                                daysMin: ["Mi", "Sn", "Sl", "Ra", "Ka", "Ju", "Sa"],
                                months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni ", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                                monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
                                noEventForToday: "Tidak ada Acara untuk Sekarang.. Jadi Beristirahatlah! :)",
                                noEventForThisDay: "Tidak ada Acara untuk Hari Ini.. Jadi Beristirahatlah! :)",
                                previousYearText: "Tahun Sebelumnya",
                                nextYearText: "Tahun Berikutnya",
                                closeSidebarText: "Tutup Sidebar",
                                closeEventListText: "Tutup Daftar Acara"
                            },
                        }
                    }, a.initials.weekends = {
                        sun: a.initials.dates[a.options.language].daysShort[0],
                        sat: a.initials.dates[a.options.language].daysShort[6]
                    }, null != a.options.calendarEvents)
                    for (var n = 0; n < a.options.calendarEvents.length; n++) a.options.calendarEvents[n].id || console.log('%c Event named: "' + a.options.calendarEvents[n].name + "\" doesn't have a unique ID ", "color:white;font-weight:bold;background-color:#e21d1d;"), a.isValidDate(a.options.calendarEvents[n].date) && (a.options.calendarEvents[n].date = a.formatDate(a.options.calendarEvents[n].date, a.options.format));
                a.startingDay = null, a.monthLength = null, a.windowW = d(window).width(), a.$current = {
                    month: isNaN(this.month) || null == this.month ? (new Date).getMonth() : this.month,
                    year: isNaN(this.year) || null == this.year ? (new Date).getFullYear() : this.year,
                    date: a.formatDate(a.initials.dates[a.defaults.language].months[(new Date).getMonth()] + " " + (new Date).getDate() + " " + (new Date).getFullYear(), a.options.format)
                }, a.$active = {
                    month: a.$current.month,
                    year: a.$current.year,
                    date: a.$current.date,
                    event_date: a.$current.date,
                    events: []
                }, a.$label = {
                    days: [],
                    months: a.initials.dates[a.defaults.language].months,
                    days_in_month: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
                }, a.$markups = {
                    calendarHTML: "",
                    mainHTML: "",
                    sidebarHTML: "",
                    eventHTML: ""
                }, a.$elements = {
                    calendarEl: d(e),
                    innerEl: null,
                    sidebarEl: null,
                    eventEl: null,
                    sidebarToggler: null,
                    eventListToggler: null,
                    activeDayEl: null,
                    activeMonthEl: null,
                    activeYearEl: null
                }, a.$breakpoints = {
                    tablet: 768,
                    mobile: 425
                }, a.$UI = {
                    hasSidebar: !0,
                    hasEvent: !0
                }, a.formatDate = d.proxy(a.formatDate, a), a.selectDate = d.proxy(a.selectDate, a), a.selectMonth = d.proxy(a.selectMonth, a), a.selectYear = d.proxy(a.selectYear, a), a.selectEvent = d.proxy(a.selectEvent, a), a.toggleSidebar = d.proxy(a.toggleSidebar, a), a.toggleEventList = d.proxy(a.toggleEventList, a), a.instanceUid = i++, a.init(!0)
            }).prototype.init = function(e) {
                var t = this;
                d(t.$elements.calendarEl).hasClass("calendar-initialized") || (d(t.$elements.calendarEl).addClass("evo-calendar calendar-initialized"), t.windowW <= t.$breakpoints.tablet ? (t.toggleSidebar(!1), t.toggleEventList(!1)) : (t.options.sidebarDisplayDefault ? t.toggleSidebar(!0) : t.toggleSidebar(!1), t.options.eventDisplayDefault ? t.toggleEventList(!0) : t.toggleEventList(!1)), t.options.theme && t.setTheme(t.options.theme), t.buildTheBones())
            }, r.prototype.destroy = function() {
                var e = this;
                e.destroyEventListener(), e.$elements.calendarEl && (e.$elements.calendarEl.removeClass("calendar-initialized"), e.$elements.calendarEl.removeClass("evo-calendar"), e.$elements.calendarEl.removeClass("sidebar-hide"), e.$elements.calendarEl.removeClass("event-hide")), e.$elements.calendarEl.empty(), e.$elements.calendarEl.attr("class", e.initials.default_class), d(e.$elements.calendarEl).trigger("destroy", [e])
            }, r.prototype.limitTitle = function(e, t) {
                var a = [];
                if (t = void 0 === t ? 18 : t, e.split(" ").join("").length > t) {
                    for (var n = e.split(" "), i = 0; i < n.length; i++) n[i].length + a.join("").length <= t && a.push(n[i]);
                    return a.join(" ") + "..."
                }
                return e
            }, r.prototype.stringCheck = function(e) {
                return e.replace(/[^\w]/g, "\\$&")
            }, r.prototype.parseFormat = function(e) {
                if ("function" == typeof e.toValue && "function" == typeof e.toDisplay) return e;
                var t = e.replace(this.initials.validParts, "\0").split("\0"),
                    e = e.match(this.initials.validParts);
                return t && t.length && e && 0 !== e.length || console.log("%c Invalid date format ", "color:white;font-weight:bold;background-color:#e21d1d;"), {
                    separators: t,
                    parts: e
                }
            }, r.prototype.formatDate = function(e, t, a) {
                var n = this;
                if (!e) return "";
                if (a = a || n.defaults.language, "string" == typeof t && (t = n.parseFormat(t)), t.toDisplay) return t.toDisplay(e, t, a);
                var i = new Date(e),
                    o = {
                        d: i.getDate(),
                        D: n.initials.dates[a].daysShort[i.getDay()],
                        DD: n.initials.dates[a].days[i.getDay()],
                        m: i.getMonth() + 1,
                        M: n.initials.dates[a].monthsShort[i.getMonth()],
                        MM: n.initials.dates[a].months[i.getMonth()],
                        yy: i.getFullYear().toString().substring(2),
                        yyyy: i.getFullYear()
                    };
                o.dd = (o.d < 10 ? "0" : "") + o.d, o.mm = (o.m < 10 ? "0" : "") + o.m, e = [];
                for (var r = d.extend([], t.separators), s = 0, l = t.parts.length; s <= l; s++) r.length && e.push(r.shift()), e.push(o[t.parts[s]]);
                return e.join("")
            }, r.prototype.getBetweenDates = function(e) {
                for (var t = this, a = [], n = 0; n < t.monthLength; n++) {
                    var i = t.formatDate(t.$label.months[t.$active.month] + " " + (n + 1) + " " + t.$active.year, t.options.format);
                    t.isBetweenDates(i, e) && a.push(i)
                }
                return a
            }, r.prototype.isBetweenDates = function(e, t) {
                var a, t = t instanceof Array ? (a = new Date(t[0]), new Date(t[1])) : (a = new Date(t), new Date(t));
                return a <= new Date(e) && t >= new Date(e)
            }, r.prototype.hasSameDayEventType = function(e, t) {
                for (var a = this, n = 0, i = 0; i < a.options.calendarEvents.length; i++)
                    if (a.options.calendarEvents[i].date instanceof Array)
                        for (var o = a.getBetweenDates(a.options.calendarEvents[i].date), r = 0; r < o.length; r++) e === o[r] && t === a.options.calendarEvents[i].type && n++;
                    else e === a.options.calendarEvents[i].date && t === a.options.calendarEvents[i].type && n++;
                return 0 < n
            }, r.prototype.setTheme = function(e) {
                var t = this,
                    a = t.options.theme;
                t.options.theme = e.toLowerCase().split(" ").join("-"), t.options.theme && d(t.$elements.calendarEl).removeClass(a), "default" !== t.options.theme && d(t.$elements.calendarEl).addClass(t.options.theme)
            }, r.prototype.resize = function() {
                var e = this;
                e.windowW = d(window).width(), e.windowW <= e.$breakpoints.tablet ? (e.toggleSidebar(!1), e.toggleEventList(!1), e.windowW <= e.$breakpoints.mobile ? d(window).off("click.evocalendar.evo-" + e.instanceUid) : d(window).on("click.evocalendar.evo-" + e.instanceUid, d.proxy(e.toggleOutside, e))) : (e.options.sidebarDisplayDefault ? e.toggleSidebar(!0) : e.toggleSidebar(!1), e.options.eventDisplayDefault ? e.toggleEventList(!0) : e.toggleEventList(!1), d(window).off("click.evocalendar.evo-" + e.instanceUid))
            }, r.prototype.initEventListener = function() {
                var e = this;
                d(window).off("resize.evocalendar.evo-" + e.instanceUid).on("resize.evocalendar.evo-" + e.instanceUid, d.proxy(e.resize, e)), e.options.sidebarToggler && e.$elements.sidebarToggler.off("click.evocalendar").on("click.evocalendar", e.toggleSidebar), e.options.eventListToggler && e.$elements.eventListToggler.off("click.evocalendar").on("click.evocalendar", e.toggleEventList), e.$elements.sidebarEl.find("[data-month-val]").off("click.evocalendar").on("click.evocalendar", e.selectMonth), e.$elements.sidebarEl.find("[data-year-val]").off("click.evocalendar").on("click.evocalendar", e.selectYear), e.$elements.eventEl.find("[data-event-index]").off("click.evocalendar").on("click.evocalendar", e.selectEvent)
            }, r.prototype.destroyEventListener = function() {
                var e = this;
                d(window).off("resize.evocalendar.evo-" + e.instanceUid), d(window).off("click.evocalendar.evo-" + e.instanceUid), e.options.sidebarToggler && e.$elements.sidebarToggler.off("click.evocalendar"), e.options.eventListToggler && e.$elements.eventListToggler.off("click.evocalendar"), e.$elements.innerEl.find(".calendar-day").children().off("click.evocalendar"), e.$elements.sidebarEl.find("[data-month-val]").off("click.evocalendar"), e.$elements.sidebarEl.find("[data-year-val]").off("click.evocalendar"), e.$elements.eventEl.find("[data-event-index]").off("click.evocalendar")
            }, r.prototype.calculateDays = function() {
                var e, t, a, n = this;
                for (n.monthLength = n.$label.days_in_month[n.$active.month], 1 == n.$active.month && (n.$active.year % 4 == 0 && n.$active.year % 100 != 0 || n.$active.year % 400 == 0) && (n.monthLength = 29), e = n.initials.dates[n.options.language].daysShort, t = n.options.firstDayOfWeek; n.$label.days.length < e.length;) t == e.length && (t = 0), n.$label.days.push(e[t]), t++;
                a = new Date(n.$active.year, n.$active.month).getDay() - t, n.startingDay = a < 0 ? n.$label.days.length + a : a
            }, r.prototype.buildTheBones = function() {
                var e = this;
                if (e.calculateDays(), !e.$elements.calendarEl.html()) {
                    for (var t = '<div class="calendar-sidebar"><div class="calendar-year"><button class="icon-button" role="button" data-year-val="prev" title="' + e.initials.dates[e.options.language].previousYearText + '"><span class="chevron-arrow-left"></span></button>&nbsp;<p></p>&nbsp;<button class="icon-button" role="button" data-year-val="next" title="' + e.initials.dates[e.options.language].nextYearText + '"><span class="chevron-arrow-right"></span></button></div><div class="month-list"><ul class="calendar-months">', a = 0; a < e.$label.months.length; a++) t += '<li class="month" role="button" data-month-val="' + a + '">' + e.initials.dates[e.options.language].months[a] + "</li>";
                    t += "</ul>", t += "</div></div>", t += '<div class="calendar-inner"><table class="calendar-table"><tr><th colspan="7"></th></tr><tr class="calendar-header">';
                    for (a = 0; a < e.$label.days.length; a++) {
                        var n = "calendar-header-day";
                        e.$label.days[a] !== e.initials.weekends.sat && e.$label.days[a] !== e.initials.weekends.sun || (n += " --weekend"), t += '<td class="' + n + '">' + e.$label.days[a] + "</td>"
                    }
                    t += "</tr></table></div>", t += '<div class="calendar-events"><div class="event-header"><p></p></div><div class="event-list"></div></div>', e.$elements.calendarEl.html(t), e.$elements.sidebarEl || (e.$elements.sidebarEl = d(e.$elements.calendarEl).find(".calendar-sidebar")), e.$elements.innerEl || (e.$elements.innerEl = d(e.$elements.calendarEl).find(".calendar-inner")), e.$elements.eventEl || (e.$elements.eventEl = d(e.$elements.calendarEl).find(".calendar-events")), e.options.sidebarToggler && (d(e.$elements.sidebarEl).append('<span id="sidebarToggler" role="button" aria-pressed title="' + e.initials.dates[e.options.language].closeSidebarText + '"><button class="icon-button"><span class="bars"></span></button></span>'), e.$elements.sidebarToggler || (e.$elements.sidebarToggler = d(e.$elements.sidebarEl).find("span#sidebarToggler"))), e.options.eventListToggler && (d(e.$elements.calendarEl).append('<span id="eventListToggler" role="button" aria-pressed title="' + e.initials.dates[e.options.language].closeEventListText + '"><button class="icon-button"><span class="chevron-arrow-right"></span></button></span>'), e.$elements.eventListToggler || (e.$elements.eventListToggler = d(e.$elements.calendarEl).find("span#eventListToggler")))
                }
                e.buildSidebarYear(), e.buildSidebarMonths(), e.buildCalendar(), e.buildEventList(), e.initEventListener(), e.resize()
            }, r.prototype.buildEventList = function() {
                var e, t = this,
                    a = !1;
                t.$active.events = [];
                var n = t.formatDate(t.$active.date, t.options.eventHeaderFormat, t.options.language);
                t.$elements.eventEl.find(".event-header > p").text(n);
                n = t.$elements.eventEl.find(".event-list");
                if (0 < n.children().length && n.empty(), t.options.calendarEvents)
                    for (var i = 0; i < t.options.calendarEvents.length; i++) {
                        (t.isBetweenDates(t.$active.date, t.options.calendarEvents[i].date) || t.options.calendarEvents[i].everyYear && new Date(t.$active.date).getMonth() + 1 + " " + new Date(t.$active.date).getDate() == new Date(t.options.calendarEvents[i].date).getMonth() + 1 + " " + new Date(t.options.calendarEvents[i].date).getDate()) && o(t.options.calendarEvents[i])
                    }

                function o(e) {
                    a = !0, t.addEventList(e)
                }
                a || (e = '<div class="event-empty">', t.$active.date === t.$current.date ? e += "<p>" + t.initials.dates[t.options.language].noEventForToday + "</p>" : e += "<p>" + t.initials.dates[t.options.language].noEventForThisDay + "</p>", e += "</div>"), n.append(e)
            }, r.prototype.addEventList = function(e) {
                var t, a = this,
                    n = a.$elements.eventEl.find(".event-list");
                0 === n.find("[data-event-index]").length && n.empty(), a.$active.events.push(e), t = '<div class="event-container" role="button" data-event-index="' + e.id + '">', t += '<div class="event-icon"><div class="event-bullet-' + e.type + '"', e.color && (t += 'style="background-color:' + e.color + '"'), t += '></div></div><div class="event-info"><p class="event-title">' + a.limitTitle(e.name), e.badge && (t += "<span>" + e.badge + "</span>"), t += "</p>", e.description && (t += '<p class="event-desc">' + e.description + "</p>"), t += "</div>", t += "</div>", n.append(t), a.$elements.eventEl.find('[data-event-index="' + e.id + '"]').off("click.evocalendar").on("click.evocalendar", a.selectEvent)
            }, r.prototype.removeEventList = function(e) {
                var t, a = this,
                    n = a.$elements.eventEl.find(".event-list");
                0 !== n.find('[data-event-index="' + e + '"]').length && (n.find('[data-event-index="' + e + '"]').remove(), 0 === n.find("[data-event-index]").length && (n.empty(), a.$active.date === a.$current.date ? t += "<p>" + a.initials.dates[a.options.language].noEventForToday + "</p>" : t += "<p>" + a.initials.dates[a.options.language].noEventForThisDay + "</p>", n.append(t)))
            }, r.prototype.buildSidebarYear = function() {
                this.$elements.sidebarEl.find(".calendar-year > p").text(this.$active.year)
            }, r.prototype.buildSidebarMonths = function() {
                this.$elements.sidebarEl.find(".calendar-months > [data-month-val]").removeClass("active-month"), this.$elements.sidebarEl.find('.calendar-months > [data-month-val="' + this.$active.month + '"]').addClass("active-month")
            }, r.prototype.buildCalendar = function() {
                var e, t = this;
                t.calculateDays(), r = t.formatDate(new Date(t.$label.months[t.$active.month] + " 1 " + t.$active.year), t.options.titleFormat, t.options.language), t.$elements.innerEl.find(".calendar-table th").text(r), t.$elements.innerEl.find(".calendar-body").remove(), e += '<tr class="calendar-body">';
                for (var a = 1, n = 0; n < 9; n++) {
                    for (var i, o = 0; o < t.$label.days.length; o++) {
                        a <= t.monthLength && (0 < n || o >= t.startingDay) ? (i = "calendar-day", t.$label.days[o] !== t.initials.weekends.sat && t.$label.days[o] !== t.initials.weekends.sun || (i += " --weekend"), e += '<td class="' + i + '">', e += '<div class="day" role="button" data-date-val="' + t.formatDate(t.$label.months[t.$active.month] + " " + a + " " + t.$active.year, t.options.format) + '">' + a + "</div>", a++) : e += "<td>", e += "</td>"
                    }
                    if (a > t.monthLength) break;
                    e += '</tr><tr class="calendar-body">'
                }
                e += "</tr>", t.$elements.innerEl.find(".calendar-table").append(e), t.options.todayHighlight && t.$elements.innerEl.find("[data-date-val='" + t.$current.date + "']").addClass("calendar-today"), t.$elements.innerEl.find(".calendar-day").children().off("click.evocalendar").on("click.evocalendar", t.selectDate);
                var r = t.$elements.innerEl.find("[data-date-val='" + t.$active.date + "']");
                r && (t.$elements.innerEl.children().removeClass("calendar-active"), r.addClass("calendar-active")), null != t.options.calendarEvents && t.buildEventIndicator()
            }, r.prototype.addEventIndicator = function(t) {
                var a, n, i = this,
                    e = t.date,
                    o = i.stringCheck(t.type);
                if (e instanceof Array) {
                    if (t.everyYear)
                        for (var r = 0; r < e.length; r++) e[r] = i.formatDate(new Date(e[r]).setFullYear(i.$active.year), i.options.format);
                    for (var s = i.getBetweenDates(e), l = 0; l < s.length; l++) d(s[l])
                } else t.everyYear && (e = i.formatDate(new Date(e).setFullYear(i.$active.year), i.options.format)), d(e);

                function d(e) {
                    0 === (n = i.$elements.innerEl.find('[data-date-val="' + e + '"]')).find("span.event-indicator").length && n.append('<span class="event-indicator"></span>'), 0 === n.find("span.event-indicator > .type-bullet > .type-" + o).length && (a = '<div class="type-bullet"><div ', a += 'class="type-' + t.type + '"', t.color && (a += 'style="background-color:' + t.color + '"'), a += "></div></div>", n.find(".event-indicator").append(a))
                }
            }, r.prototype.removeEventIndicator = function(e) {
                var t = this,
                    a = e.date,
                    n = t.stringCheck(e.type);
                if (a instanceof Array)
                    for (var i = t.getBetweenDates(a), o = 0; o < i.length; o++) r(i[o]);
                else r(a);

                function r(e) {
                    0 !== t.$elements.innerEl.find('[data-date-val="' + e + '"] span.event-indicator').length && (t.hasSameDayEventType(e, n) || t.$elements.innerEl.find('[data-date-val="' + e + '"] span.event-indicator > .type-bullet > .type-' + n).parent().remove())
                }
            }, r.prototype.buildEventIndicator = function() {
                this.$elements.innerEl.find(".calendar-day > day > .event-indicator").empty();
                for (var e = 0; e < this.options.calendarEvents.length; e++) this.addEventIndicator(this.options.calendarEvents[e])
            }, r.prototype.selectEvent = function(e) {
                var t = this,
                    a = d(e.target).closest(".event-container"),
                    e = d(a).data("eventIndex").toString(),
                    a = t.options.calendarEvents.map(function(e) {
                        return e.id.toString()
                    }).indexOf(e),
                    e = t.options.calendarEvents[a];
                e.date instanceof Array && (e.dates_range = t.getBetweenDates(e.date)), d(t.$elements.calendarEl).trigger("selectEvent", [t.options.calendarEvents[a]])
            }, r.prototype.selectYear = function(e) {
                var t, a = this;
                "string" == typeof e || "number" == typeof e ? 4 === parseInt(e).toString().length && (t = parseInt(e)) : (e = d(e.target).closest("[data-year-val]"), t = d(e).data("yearVal")), "prev" == t ? --a.$active.year : "next" == t ? ++a.$active.year : "number" == typeof t && (a.$active.year = t), a.windowW <= a.$breakpoints.mobile && a.$UI.hasSidebar && a.toggleSidebar(!1), d(a.$elements.calendarEl).trigger("selectYear", [a.$active.year]), a.buildSidebarYear(), a.buildCalendar()
            }, r.prototype.selectMonth = function(e) {
                var t = this;
                "string" == typeof e || "number" == typeof e ? 0 <= e && e <= t.$label.months.length && (t.$active.month = e.toString()) : t.$active.month = d(e.currentTarget).data("monthVal"), t.buildSidebarMonths(), t.buildCalendar(), t.windowW <= t.$breakpoints.tablet && t.$UI.hasSidebar && t.toggleSidebar(!1), d(t.$elements.calendarEl).trigger("selectMonth", [t.initials.dates[t.options.language].months[t.$active.month], t.$active.month])
            }, r.prototype.selectDate = function(e) {
                var t, a, n, i = this,
                    o = i.$active.date;
                "string" == typeof e || "number" == typeof e || e instanceof Date ? (t = i.formatDate(new Date(e), i.options.format), a = new Date(t).getFullYear(), n = new Date(t).getMonth(), i.$active.year !== a && i.selectYear(a), i.$active.month !== n && i.selectMonth(n), n = i.$elements.innerEl.find("[data-date-val='" + t + "']")) : t = (n = d(e.currentTarget)).data("dateVal"), e = i.$active.date === t, i.$active.date = t, i.$active.event_date = t, i.$elements.innerEl.find("[data-date-val]").removeClass("calendar-active"), n.addClass("calendar-active"), e || i.buildEventList(), d(i.$elements.calendarEl).trigger("selectDate", [i.$active.date, o])
            }, r.prototype.getActiveDate = function() {
                return this.$active.date
            }, r.prototype.getActiveEvents = function() {
                return this.$active.events
            }, r.prototype.toggleOutside = function(e) {
                var t = this,
                    e = e.target === t.$elements.innerEl[0];
                t.$UI.hasSidebar && e && t.toggleSidebar(!1), t.$UI.hasEvent && e && t.toggleEventList(!1)
            }, r.prototype.toggleSidebar = function(e) {
                var t = this;
                void 0 === e || e.originalEvent ? (d(t.$elements.calendarEl).toggleClass("sidebar-hide"), t.$UI.hasSidebar = !t.$UI.hasSidebar) : e ? (d(t.$elements.calendarEl).removeClass("sidebar-hide"), t.$UI.hasSidebar = !0) : (d(t.$elements.calendarEl).addClass("sidebar-hide"), t.$UI.hasSidebar = !1), t.windowW <= t.$breakpoints.tablet && t.$UI.hasSidebar && t.$UI.hasEvent && t.toggleEventList()
            }, r.prototype.toggleEventList = function(e) {
                var t = this;
                void 0 === e || e.originalEvent ? (d(t.$elements.calendarEl).toggleClass("event-hide"), t.$UI.hasEvent = !t.$UI.hasEvent) : e ? (d(t.$elements.calendarEl).removeClass("event-hide"), t.$UI.hasEvent = !0) : (d(t.$elements.calendarEl).addClass("event-hide"), t.$UI.hasEvent = !1), t.windowW <= t.$breakpoints.tablet && t.$UI.hasEvent && t.$UI.hasSidebar && t.toggleSidebar()
            }, r.prototype.addCalendarEvent = function(e) {
                var n = this;

                function t(t) {
                    if (t.id || console.log('%c Event named: "' + t.name + "\" doesn't have a unique ID ", "color:white;font-weight:bold;background-color:#e21d1d;"), t.date instanceof Array)
                        for (var e = 0; e < t.date.length; e++) a(t.date[e]) && (t.date[e] = n.formatDate(new Date(t.date[e]), n.options.format));
                    else a(t.date) && (t.date = n.formatDate(new Date(t.date), n.options.format));

                    function a(e) {
                        if (n.isValidDate(e)) return 1;
                        console.log('%c Event named: "' + t.name + '" has invalid date ', "color:white;font-weight:bold;background-color:#e21d1d;")
                    }
                    n.options.calendarEvents || (n.options.calendarEvents = []), n.options.calendarEvents.push(t), n.addEventIndicator(t), n.$active.event_date === t.date && n.addEventList(t)
                }
                if (e instanceof Array)
                    for (var a = 0; a < e.length; a++) t(e[a]);
                else "object" == typeof e && t(e)
            }, r.prototype.removeCalendarEvent = function(e) {
                var n = this;

                function t(e) {
                    var t, a = n.options.calendarEvents.map(function(e) {
                        return e.id
                    }).indexOf(e);
                    0 <= a ? (t = n.options.calendarEvents[a], n.options.calendarEvents.splice(a, 1), n.removeEventList(e), n.removeEventIndicator(t)) : console.log("%c " + e + ": ID not found ", "color:white;font-weight:bold;background-color:#e21d1d;")
                }
                if (e instanceof Array)
                    for (var a = 0; a < e.length; a++) t(e[a]);
                else t(e)
            }, r.prototype.isValidDate = function(e) {
                return new Date(e) && !isNaN(new Date(e).getTime())
            }, d.fn.evoCalendar = function() {
                for (var e, t = this, a = arguments[0], n = Array.prototype.slice.call(arguments, 1), i = t.length, o = 0; o < i; o++)
                    if ("object" == typeof a || void 0 === a ? t[o].evoCalendar = new r(t[o], a) : e = t[o].evoCalendar[a].apply(t[o].evoCalendar, n), void 0 !== e) return e;
                return t
            }
        });
    </script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-5">
        <footer class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-md-0 py-5 my-2 border-top">
            <div class="col">
                <a href="/" class="d-flex align-items-center mb-4 link-dark text-decoration-none">
                    <h3 class="font-weight">TI-1D</h3>
                </a>
                <p class="text-muted lh-sm">Buket Rata, Lhokseumawe
                </p>
                <p class="text-muted lh-sm">&copy; Kelompok 1 WWD</p>
            </div>

            <div class="col ms-auto">
                <h6 class="fw-bold mb-2">Contact Us</h6>
                <ul class="nav flex-column mb-3">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">
                            <i class="fa-regular fa-envelope me-1"></i> itoned@gmail.com
                        </a>
                    </li>
                </ul>

                <h6 class="fw-bold mb-2">Official Partners Website</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politeknik Negeri
                        Lhokseumawe</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknologi Informasi dan
                        Komputer</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknik Informatika</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknologi Rekayasa
                        Komputer Jaringan</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknologi Rekayasa
                        Multimedia</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>