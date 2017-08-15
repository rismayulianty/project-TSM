
                            
                            <div class="form-group{{ $errors->has('nama','kategori') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('nama','Judul Prestasi *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('nama',null,['class'=>'form-control']) !!}
                                    {!! $errors->first('nama','<p class="help-block">:message</p>') !!}
                                </div>
                           <br><br>
                            <div class="form-group{{ $errors->has('prestasi') ? 'has-error' : '' }}">
                                {!! Form::label('gambar','Foto Prestasi *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($prestasi) && $prestasi->gambar)
                                <p>
                                    {!! Html::image(asset('image/'.$prestasi->gambar),null,['class'=>'image-rounded image-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="pretasi" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('pretasi','<p class="help-block">:message</p>') !!}
                                </div>
                               
                            
                            <div class="form-group" align="center">
                                <div class="col-md-5 col-md-offset-4">
                                <br>
                                <center>
                                {!! Form::submit('Simpan Prestasi', ['class'=>'btn btn-primary']) !!}
                                </center>
                                </div>
                            </div>