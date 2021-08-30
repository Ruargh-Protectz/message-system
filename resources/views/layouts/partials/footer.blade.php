<footer>
    @if(session('status'))
        <div style="
            width:100%;
            position:fixed;
            bottom:0%;
            height:20px;
            background:red;
            color:white;
            text-align:center;
            font-size:12px;">

            {{ session('status') }}
        </div>
    @endif
</footer>
