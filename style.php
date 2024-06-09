<style>
	*{
	    margin: 0;
	    padding: 0;
	    box-sizing: border-box;
	}
    html{
        margin: 0;
        width: 100%;
    }
	body{
		display: block;
		position: relative;
        text-align: left;

        width: 100%;
        height: 100%;
        font-family: "Futura", "Lato", Helvetica, Arial, sans-serif;
        font-weight: 400;
        color: black;
        background: #f4f4f6;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
	}
	header,
	footer{
        color: white;
		width: 100%;
		height: auto;
        max-height: 100px;
        background: rgb(44, 179, 74) !important;
        text-shadow: 1px 2px 2.5px #070707;
	}
	header{
		top: 0;
        width: 100%;
		height: auto;
		max-height: 100px;
	}
    .f-container{
        display: inline-flex;
        overflow: hidden;
        width: 100%;

    }
    .mving{
        display: inline;
        width: 100%;
        flex: 0 0 auto;
        animation: scrolLeftToRigth 15s linear infinite;
    }
    @keyframes
        scrolLeftToRigth {
            0%{
                transform: translateX(-100%);
            }
            100%{
                transform: translateX(100%);
            }
    }
    footer,
    .container-1{
        position: sticky;
        width: 100%;
        text-align: center;
        bottom: 0;/*
        background-color: #0000001f;*/
    }

    ul,
     p{
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
        unicode-bidi: isolate;
    }
    h2{

       /* margin-bottom: 0.5rem;*/
        font-family: Futura-Bold;
        font-size: 26px;
        /*line-height: 1.2;
        color: inherit;*/
    }
    input,
    lebel{
        margin: 2px;
        padding: 5px;
        text-align: center;
    }
	a{
		text-decoration: none;/*
		border: 1px solid black;
		border-radius: 5px;
*/
	}
    .container{
        margin: 10px;
        padding: 5px;
    }
    .header-cont{
        display: inline-block;
        padding: 5px;
        background-color: #0000001f;
        border-radius: 15px;

    }
    .assist-p{
        background-color: black;
    }
    .assist-text{
        border: none;
        color: ghostwhite;

    }
    .l-page{
        padding: 2px;
        border: 1px solid black;
        background-color: #e4e4c1;
        text-shadow: 1px 2px 2.5px #070707;
    }
    .form{
        margin: 0;
        padding: 10px;
        border: none;
        text-align: center;
    }
    .main-body{
        width: 100%;
        height: auto;
        min-height: 1px;
        padding: 30px 0px;
        -webkit-box-flex: 0;
        max-width: 100%;
        flex: 0 0 100%;
    }
    .main-bodyk{
    }
    .head-h2{
        margin-left: 15px;
    }
    tbody{
        margin: 10px;
        padding: 10px;
        height: auto;
        display: table-row-group;
        vertical-align: middle;
        unicode-bidi: isolate;
        border-color: inherit;
    }
    td{
        margin: 10px;
        padding: 10px;
        background-color: #4f484878;
        border-radius: 5px;
        
        border-right: 1px solid rgba(0, 0, 0, 0.5);
    }
    .tr {
        margin: 10px;
        padding: 10px;
        display: grid;
        width: 100%;
        height: auto;
        min-height: 50px;
        background-color: #87ceeb3d;
        border: 2px solid black; 
        border-radius: 10px;
    }
    .table{
        margin: 10px;
        border-collapse: separate;
        display: inline-grid;
        justify-content: center;
        background-color: #fafad238;
        border-radius: 10px;
    }
    .upper-l{
        
    }
	.fpage{
        display: block;
        text-align: center;
		width: 100%;
		height: auto;
		min-height: 100vh;
	}
    .lower-upper{
        border: 1px solid black;
        background-color: #064d011c;
    }
    .lower-s{
        display:;
        margin: 10px;
        padding: 10px;
        width: inherit;
        height: auto;
        min-height: 150px;
        border: 1px solid black;
        border-radius: 10px;
        background-color: rgb(44, 179, 74);
    }
    .h2-in{
        text-shadow: 2px 2px 2.5px white;
        background-color: #8fbc8f30;
        border-radius: 5px;
    }
    img{
        width: 150px;
        height: 100px;
        margin: 0;
        padding: 10px;
        border-radius: 5px;
    }
    table {
        border-collapse: collapse;
        width: 100% !important;
        border: 1px solid rgba(0, 0, 0, 0.5);
        margin: 25px -35px;
        padding-left: 15px;
        box-sizing: border-box;
        text-indent: initial;
        unicode-bidi: isolate;
        border-spacing: 2px;
    }
    td {
        border-right: 1px solid rgba(0, 0, 0, 0.5);
        padding: 10px;
        font-size: 14px;
    }
    tr {
        border-bottom: 1px solid rgba(0, 0, 0, 0.5);
    }
    td 
    tr{
        display: table-cell;
        vertical-align: inherit;
        unicode-bidi: isolate;
    }
     ul
     li {
        margin-bottom: 1rem;
        list-style-type: disc;
        line-height: 30px;
        letter-spacing: 0.4px;
    }
    .buttons{
        font-size: 15px;
        margin-top: 15px;
        display: inline-block;
        color: rgb(255, 255, 255);
        padding: 7px 20px;
        border-radius: 20px;
        background: rgb(44, 179, 74);
        text-shadow: -1px 1px 2px black;

    }
    .veri{
        align-content: center;
        width: 100%;
        height: 100vh;
    }
    .t-cong{
        margin: 3px;
        padding: 5px;
    }
    .t-cong2{
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 20%;
        margin-right: 10%;
    }
    .t-cong3{
        margin: 3px;
        padding: 10px;
        color: #f64d4d;
        font-size: 1.25rem;
    }
    .head-b{
        display: inline-block;
        justify-content: space-evenly;
    }
    .head-h{
        text-align: center;
    }
    .t-bbody{

    }
    .t-body{
        display: inline-block;
        margin-left: 25%;
        margin-right: 25%;
        padding: 10px;
        border: 1px solid black;
        border-radius: 15px;
        background-color: burlywood;
    }
    .t-form{
        padding: 15px;
    }
    .h-buttons{

        margin: 10px;
        font-size: 1.5rem;
        background-color: #2e8b5794;
        text-decoration: none;
        color: black;
        font-weight: 700;
        border-radius: 10px;
        padding: 2px;
    }
    .f-veri{
        margin-left: 20%;
        margin-right: 20%;
        border: 2px solid black;
        border-radius: 5px;


    }
    .no-members{
        color: black;
        font-weight: 700;
    }
	/*    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1rem;
    line-height: 1.5;
    text-align: left;
    font-family: "Futura", "Lato", Helvetica, Arial, sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    color: #000;
    box-sizing: border-box;
    padding: 0;
    border-collapse: collapse;
    width: 100% !important;
    border: 1px solid rgba(0, 0, 0, 0.5);
    margin: 25px auto;*/
</style>