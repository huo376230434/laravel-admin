<style>


    .form-inline .form-group{
        margin-bottom: 5px;
    }
    .form-inline .form-group .select2-container--default {
        width: auto;
    }

    .form-inline .form-group label{
        margin-left: 10px;
    }
    .btn{
        margin-bottom: 5px;
    }
</style>

<div class="form-inline pull-right">
    <form action="{!! $action !!}" method="get" pjax-container>
        <fieldset>

            @foreach($filters as $filter)
                {!! $filter->render() !!}
            @endforeach

            <div class="btn-group btn-group-sm" >
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>搜索</button>
                <a href="{!! $action !!}" class="btn btn-warning" ><i class="fa fa-undo"></i> 重置</a>
            </div>

        </fieldset>
    </form>
</div>
