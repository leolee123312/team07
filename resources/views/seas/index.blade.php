


@extends('app')
@section('title', '魚類網站 - 列出所屬海洋')

@section('seas_contents')
<div>
    <a href="{{ route('seas.create') }} " class="btn btn-primary btn-sm ">新增海域</a>
   
</div>   
<h1>列印出對應的海域</h1>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">海域</th>
                    <th scope="col">地區</th>
                    <th scope="col">面積(平方千米)</th>
                    <th scope="col">平均深度</th>
                    <th scope="col">地貌</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seas as $sea)
                <tr>
                    <td scope="row">{{ $sea->ocean_name }}</td>
                    <td >{{ $sea->region }}</td>
                    <td >{{ $sea->area_sq_km }}</td>
                    <td >{{ $sea->avg_depth }}</td>
                    <td >{{ $sea->geomorphology }}</td>
                    

                        <td >
                            
                                <a href="{{ route('seas.show', ['id'=>$sea->id]) }}" class="btn btn-primary btn-sm">顯示</a>
                                <a href="{{ route('seas.edit', ['id'=>$sea->id]) }}" class="btn btn-primary btn-sm">修改</a> 
                                <form action="{{ url('/seas/delete', ['id' => $sea->id]) }}" method="post" style="display: inline;"  >
                                        <input class="btn btn-primary btn-sm" type="submit" value="刪除" />
                                         @method('delete')
                                        @csrf
                                </form>
                            
                        </td>
                    
                </tr>   
                @endforeach

            </tbody>
    </table>
@endsection