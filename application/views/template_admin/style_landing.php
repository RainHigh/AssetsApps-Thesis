<style type="text/css">
    .dropdown-menu>li {
        position: relative;
        -webkit-user-select: none;
        /* Chrome/Safari */
        -moz-user-select: none;
        /* Firefox */
        -ms-user-select: none;
        /* IE10+ */
        /* Rules below not implemented in browsers yet */
        -o-user-select: none;
        user-select: none;
        cursor: pointer;
    }

    .dropdown-menu .sub-menu {
        left: 100%;
        position: absolute;
        top: 0;
        display: none;
        margin-top: -1px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left-color: #fff;
        box-shadow: none;
    }

    .right-caret:after,
    .left-caret:after {
        content: "";
        border-bottom: 5px solid transparent;
        border-top: 5px solid transparent;
        display: inline-block;
        height: 0;
        vertical-align: middle;
        width: 0;
        margin-left: 5px;
    }

    .right-caret:after {
        border-left: 5px solid #ffaf46;
    }

    .left-caret:after {
        border-right: 5px solid #ffaf46;
    }
</style>
</head>