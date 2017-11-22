@extends('layouts.layout')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-12">
            @if(session('custom_success'))
              <div class="alert alert-success" role = "alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <strong>Success!</strong>
                <span>{{ Session::get('custom_success') }}</span>
              </div>
            @endif
              <form action="{{url('/admin/addquestion')}}" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" id="addQuestion">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="name" class="col-md-2 control-label col-md-offset-1">Question</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="question" id="question" placeholder="Type a Question">
                  </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-md-2 control-label col-md-offset-1">Option A</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="option_1" id="option_1" placeholder="Option A">
                  </div>
                  <label for="name" class="col-md-2 control-label">Option B</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="option_2" id="option_2" placeholder="Option B">
                  </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-md-2 control-label col-md-offset-1">Option C</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="option_3" id="option_3" placeholder="Option C">
                  </div>
                  <label for="name" class="col-md-2 control-label">Option D</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="option_4" id="option_4" placeholder="Option D">
                  </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-md-2 control-label col-md-offset-1">Answer</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="answer" id="answer" placeholder="Type a Answer">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2 col-md-offset-3">
                    <button type="button" class="btn btn-primary" id="add">Save</button>
                  </div>
                </div>
              </form>
              <table class="table table-borderless" id="addRecord">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Question</th>
                    <th>Option A</th>
                    <th>Option B</th>
                    <th>Option C</th>
                    <th>Option D</th>
                    <th>Answer</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($data as $value)
                <tr class="item{{$value->id}}">
                  <td>{{$value->id}}</td>
                  <td>{{$value->question}}</td>
                  <td>{{$value->option_1}}</td>
                  <td>{{$value->option_2}}</td>
                  <td>{{$value->option_3}}</td>
                  <td>{{$value->option_4}}</td>
                  <td>{{$value->answer}}</td>
                  <td><span class="glyphicon glyphicon-edit edit-modal" data-id = "{{$value->id}}" data-question = "{{$value->question}}" data-option_1 = "{{$value->option_1}}" data-option_2 = "{{$value->option_2}}" data-option_3 = "{{$value->option_3}}" data-option_4 = "{{$value->option_4}}" data-answer = "{{$value->answer}}"></span> <span class="glyphicon glyphicon-trash delete-modal" data-id = "{{$value->id}}"></span></td>  
                </tr>
                @endforeach
              </table>
            </div>
          <!-- /top tiles -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal edit-form" role="form">
                          <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Question</label>
                            <div class="col-md-10">
                              <input type="text" class="form-control" name="edit_question" id="edit_question">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Option A</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="edit_option_1" id="edit_option_1">
                            </div>
                            <label for="name" class="col-md-2 control-label">Option B</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="edit_option_2" id="edit_option_2">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Option C</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="edit_option_3" id="edit_option_3">
                            </div>
                            <label for="name" class="col-md-2 control-label">Option D</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="edit_option_4" id="edit_option_4">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Answer</label>
                            <div class="col-md-10">
                              <input type="text" class="form-control" name="edit_answer" id="edit_answer">
                              <input type="hidden" name="id" id="id" />
                            </div>

                          </div>
                        </form>
                        <div class="deleteContent">
                            Are you Sure you want to delete this record <span class="dname"></span> ? <span
                                class="hidden did"></span>
                                <input type="hidden" name="del_id" id="del_id" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn actionBtn" data-dismiss="modal">
                                <span id="footer_action_button" class='glyphicon'> </span>
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
          
        <!-- /page content -->
@endsection
@section('script')
<script type="text/javascript">
var addSerialNumber = function () {
    $('table tr').each(function(index) {
        $(this).find('td:nth-child(1)').html(index+1);
    });
};
$(document).ready(function(){
    $('tbody').sortable();

  $('#add').click(function(){
    $.ajax({
      type:'post',
      url:'./addquestion',
      dataType: 'json',
      data:{
        '_token': $('input[name=_token]').val(),
        'question':$('input[name=question]').val(),
        'option_1':$('input[name=option_1]').val(),
        'option_2':$('input[name=option_2]').val(),
        'option_3':$('input[name=option_3]').val(),
        'option_4':$('input[name=option_4]').val(),
        'answer':$('input[name=answer]').val()
      },
      success:function(data){
          
        $('#addRecord').append("<tr class='item"+data.id+" ui-state-default'><td>"+ data.id +"</td><td>"+ data.question +"</td><td>"+ data.option_1 +"</td><td>"+ data.option_2 +"</td><td>"+ data.option_3 +"</td><td>"+ data.option_4 +"</td><td>"+ data.answer +"</td><td><span class='glyphicon glyphicon-edit edit-modal' data-id="+data.id+" data-question='"+data.question+"' data-option_1 = '"+data.option_1+"' data-option_2 = '"+data.option_2+"' data-option_3 = '"+data.option_3+"' data-option_4 = '"+data.option_4+"' data-answer = '"+data.answer+"'></span> <span class='glyphicon glyphicon-trash delete-modal' data-id="+data.id+"></span></td></tr>");
        $("form").trigger("reset");  
      }
    });    
  });
  $(document).on('click','.edit-modal', function(){
      $('#footer_action_button').text('Update');
      $('.actionBtn').addClass('btn-success');
      $('.actionBtn').removeClass('btn-danger');
      $('.actionBtn').addClass('edit');
      $('.modal-title').text('Edit Records');
      $('.edit-form').show();
      $('.deleteContent').hide();
      $('#myModal').modal('show');
      $('#id').val($(this).data('id'));
      $('#edit_question').val($(this).data('question'));
      $('#edit_option_1').val($(this).data('option_1'));
      $('#edit_option_2').val($(this).data('option_2'));
      $('#edit_option_3').val($(this).data('option_3'));
      $('#edit_option_4').val($(this).data('option_4'));
      $('#edit_answer').val($(this).data('answer'));
  });

  $('.modal-footer').on('click', '.edit', function(){
    $.ajax({
        type:'post',
        url:'./editquestion',
        dataType: 'json',
        async: false,
        data:{
          '_token':$('input[name=_token]').val(),
          'id' : $('#id').val(),
          'edit_question':$('#edit_question').val(),
          'edit_option_1':$('#edit_option_1').val(),
          'edit_option_2':$('#edit_option_2').val(),
          'edit_option_3':$('#edit_option_3').val(),
          'edit_option_4':$('#edit_option_4').val(),
          'edit_answer':$('#edit_answer').val()
        },
        success:function(data){
          
          $('.item'+ data.id).replaceWith("<tr class='item"+data.id+"'><td>"+data.id+"</td><td>"+data.question+"</td><td>"+data.option_1+"</td><td>"+data.option_2+"</td><td>"+data.option_3+"</td><td>"+data.option_4+"</td><td>"+data.answer+"</td><td><span class='glyphicon glyphicon-edit edit-modal' data-id="+data.id+" data-question='"+data.question+"' data-option_1 = '"+data.option_1+"' data-option_2 = '"+data.option_2+"' data-option_3 = '"+data.option_3+"' data-option_4 = '"+data.option_4+"' data-answer = '"+data.answer+"'></span> <span class='glyphicon glyphicon-trash delete-modal' data-id="+data.id+"></span></td></tr>");
        }
      });
  });
  
  $(document).on('click', '.delete-modal', function(){
    $('.edit-form').hide();
    $('.deleteContent').show();
    $('.modal-title').text('Delete Records');
    $('.modal-footer').css('border', 'none');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('#footer_action_button').text('Delete');
    $('#myModal').modal('show');
    $('#del_id').val($(this).data('id'));
  });
  $(document).on('click', '.delete', function(){
    $.ajax({
      type:'post',
      url:'./deleterecord',
      dataType:'json',
      async:false,
      data:{
        '_token':$('input[name = _token]').val(),
        'id': $('#del_id').val()
      },
      success:function(data){
        $('.item' + data).remove();
      }
    });
  });
});

</script>
@endsection