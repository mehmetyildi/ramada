<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5><i class="fa fa-eye"></i> Yayınlama</h5>
        @include('cms.includes.form-partials.ibox-resize')
    </div>
    <div class="ibox-content">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="publish">Yayınla</label>
            <div class="col-sm-9">
                <input type="checkbox" name="publish" class="js-switch js-switch1" {{ $record->publish ? 'checked' : '' }} />
            </div>
        </div>
        <!-- <div class="form-group">
            <label class="control-label col-sm-3">İlk Yayın Tarihi</label>
            <div class="input-group date date1 col-sm-9">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="publish_at" value="{{ $record->publish_at ? convertDate($record->publish_at) : '' }}" autocomplete="off">
                {{ $errors->first('publish_at') }}
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Son Yayın Tarihi</label>
            <div class="input-group date date1 col-sm-9">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="publish_until" value="{{ $record->publish_until ? convertDate($record->publish_until) : '' }}" autocomplete="off">
                {{ $errors->first('publish_until') }}
            </div>
        </div> -->
    </div>
</div>