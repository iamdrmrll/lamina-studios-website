@extends('layouts.admin-app')

@section('document-title')
    Projects | Lamina Studios
@endsection

@section('active-4')
    active
@endsection

@section('content')
    <div class="content flex-grow d-flex flex-column bg-whitish-gray">
        <div class="header-container d-flex flex-row justify-content-space-between align-items-center px-3 py-3">
            <h1 class="header-name">Projects</h1>
            @if (session('status'))
                <h3 class="status border-light-green border-none color-darker-green px-1 py-2 bg-lighter-green bd-r-0p5">
                    {{ session('status') }}</h3>
            @endif
            <span data-toggle="modal" data-target="#AddProjectModal"
                class="add-project-btn fw-600 border border-main px-2 py-2 bg-white">add new project</span>

            {{-- modal for add --}}
            <div class="modal modal-add" id="AddProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-container">
                        <div class="modal-head-container">
                            <h4 class="modal-title">Add new project</h4>
                            <h4 class="x cursor-pointer">X</h4>
                        </div>
                        <div class="modal-body-container">
                            <form action="{{ url('admin/projects/add-project') }}" method="POST"
                                enctype="multipart/form-data" class="">
                                @csrf
                                <div class="page">
                                    <h4>main page</h4>
                                    <div class="row">
                                        <div class="col">
                                            <label for="add-main-upload-bg" class="upload_bg">upload bg image</label>
                                            <div class="upload-btn">
                                                <div class="fake-input">
                                                    <label for="add-main-upload-bg"><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                    <label id="add-main-filename" for="add-main-upload-bg" class="filename"></label>
                                                </div>
                                                <input id="add-main-upload-bg" name="main_page_bg" type="file" class="fileInput" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="add-project-name" class="project-name">project name</label>
                                            <input id="add-project-name" name="project_name" type="text" required>
                                        </div>
                                        <div class="col">
                                            <label for="add-read-more-link">read more link</label>
                                            <input id="add-read-more-link" name="read_more_link" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="add-present-link">present link</label>
                                            <input id="add-present-link" name="present_link" type="text">
                                        </div>
                                        <div class="col">
                                            <label for="add-gamepedia-link">gamepedia link</label>
                                            <input id="add-gamepedia-link" name="gamepedia_link" type="text">
                                        </div>
                                        <div class="col">
                                            <label for="add-merch-store-link">merch store link</label>
                                            <input id="add-merch-store-link" name="merchstore_link" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <h4>first page</h4>
                                    <div class="row">
                                        <div class="col">
                                            <label for="add-first-upload-bg" class="upload_bg">upload bg image</label>
                                            <div class="upload-btn">
                                                <div class="fake-input">
                                                    <label for="add-first-upload-bg"><i
                                                            class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                    <label id="add-first-filename" for="add-first-upload-bg" class="filename"></label>
                                                </div>
                                                <input id="add-first-upload-bg" name="first_page_bg" type="file"
                                                    class="fileInput" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="add-trailer-link">trailer link</label>
                                            <input id="add-trailer-link" name="trailer_link" type="text">
                                        </div>
                                        <div class="col">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col description-row">
                                            <label for="add-description">description</label>
                                            <textarea name="description" id="add-description" cols="50" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <h4>second page</h4>
                                    <div class="row">
                                        <div class="col">
                                            <label for="add-second-upload-bg" class="upload_bg">upload bg image</label>
                                            <div class="upload-btn">
                                                <div class="fake-input">
                                                    <label for="add-second-upload-bg"><i
                                                            class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                    <label id="add-second-filename" for="add-second-upload-bg" class="filename"></label>
                                                </div>
                                                <input id="add-second-upload-bg" name="second_page_bg" type="file"
                                                    class="fileInput" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="awards">awards</label>
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                        <div class="col">
                                            <label for="press-mentions">press mentions</label>
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <h4>third page</h4>
                                    <div class="row">
                                        <div class="col">
                                            <label for="add-third-upload-bg" class="upload_bg">upload bg image</label>
                                            <div class="upload-btn">
                                                <div class="fake-input">
                                                    <label for="add-third-upload-bg"><i
                                                            class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                    <label id="add-third-filename" for="add-third-upload-bg" class="filename"></label>
                                                </div>
                                                <input id="add-third-upload-bg" name="third_page_bg" type="file"
                                                    class="fileInput" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="online-stores">online stores</label>
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                        <div class="col">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="add-modding-editor-link">modding editor link</label>
                                            <input id="add-modding-editor-link" name="modding_editor_link" type="text">
                                        </div>
                                        <div class="col">
                                            <label for="add-documentation-link">documentation link</label>
                                            <input id="add-documentation-link" name="documentation_link" type="text">
                                        </div>
                                        <div class="col w-33">
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <h4>fourth page</h4>
                                    <div class="row">
                                        <div class="col">
                                            <label for="add-fourth-upload-bg" class="upload_bg">upload bg image</label>
                                            <div class="upload-btn">
                                                <div class="fake-input">
                                                    <label for="add-fourth-upload-bg"><i
                                                            class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                    <label id="add-fourth-filename" for="add-fourth-upload-bg" class="filename"></label>
                                                </div>
                                                <input id="add-fourth-upload-bg" name="fourth_page_bg" type="file"
                                                    class="fileInput" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="creative-team">creative team</label>
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                        <div class="col w-33">
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row footer">
                                        <button type="submit" class="add-btn btn btn-main ml-auto">
                                            <span class="text-uppercase d-inline-block fw-600">publish</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-container flex-grow d-flex flex-column align-items-center justify-content-center">
            <table class="m-3 bg-white">
                <thead class="bg-black color-white">
                    <tr>
                        <th>no</th>
                        <th>id</th>
                        <th>image</th>
                        <th>title</th>
                        <th>description</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->project_id }}</td>
                            <td><img src="{{ asset('img/projects/bg/00_main_page_bg/' . $project->main_page_bg) }}"
                                    alt="{{ $project->project_name }}"></td>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>
                                <a href="{{ url('admin/projects/#' . $project->project_id) }}" data-toggle="modal" data-target="{{ '#' . $project->project_id }}}" class="edit"><i
                                        class="edit-{{ $loop->iteration }} fa-solid fa-pen bg-blue"></i></a>
                                {{-- modal for edit --}}
                                <div class="modal modal-edit modal-edit-{{ $loop->iteration }}"
                                    id="{{ $project->project_id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-container">
                                            <div class="modal-head-container">
                                                <h4 class="modal-title">Edit project - {{ $project->project_name }}</h4>
                                                <h4 class="x cursor-pointer">X</h4>
                                            </div>
                                            <div class="modal-body-container">
                                                <form action="{{ url('admin/projects/update-project/' . $project->project_id) }}" method="POST"
                                                    enctype="multipart/form-data" class="">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="page">
                                                        <h4>main page</h4>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="edit-main-upload-bg-{{ $project->project_id }}" class="upload_bg">upload bg image</label>
                                                                <div class="upload-btn">
                                                                    <div class="fake-input">
                                                                        <label for="edit-main-upload-bg-{{ $project->project_id }}"><i
                                                                                class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                                        <label id="edit-main-filename-{{ $project->project_id }}" for="edit-main-upload-bg-{{ $project->project_id }}"
                                                                            class="editFileName editFileName-{{ $loop->iteration }} editFileNamePos-1">{{ $project->main_page_bg }}</label>
                                                                    </div>
                                                                    <input id="edit-main-upload-bg-{{ $project->project_id }}" name="main_page_bg"
                                                                        type="file" class="editFileInput editFileInput-{{ $loop->iteration }} editFileInputPos-1">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="edit-project-name-{{ $project->project_id }}" class="project-name">project
                                                                    name</label>
                                                                <input id="edit-project-name-{{ $project->project_id }}" name="project_name" type="text"
                                                                    value="{{ $project->project_name }}" required>
                                                            </div>
                                                            <div class="col">
                                                                <label for="edit-read-more-link-{{ $project->project_id }}">read more link</label>
                                                                <input id="edit-read-more-link-{{ $project->project_id }}" name="read_more_link"
                                                                    value="{{ $project->read_more_link }}" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="edit-present-link-{{ $project->project_id }}">present link</label>
                                                                <input id="edit-present-link-{{ $project->project_id }}" name="present_link"
                                                                    value="{{ $project->present_link }}" type="text">
                                                            </div>
                                                            <div class="col">
                                                                <label for="edit-gamepedia-link-{{ $project->project_id }}">gamepedia link</label>
                                                                <input id="edit-gamepedia-link-{{ $project->project_id }}" name="gamepedia_link"
                                                                    value="{{ $project->gamepedia_link }}" type="text">
                                                            </div>
                                                            <div class="col">
                                                                <label for="edit-merch-store-link-{{ $project->project_id }}">merch store link</label>
                                                                <input id="edit-merch-store-link-{{ $project->project_id }}" name="merchstore_link"
                                                                    value="{{ $project->merchstore_link }}" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page">
                                                        <h4>first page</h4>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="edit-first-upload-bg-{{ $project->project_id }}" class="upload_bg">upload
                                                                    bg image</label>
                                                                <div class="upload-btn">
                                                                    <div class="fake-input">
                                                                        <label for="edit-first-upload-bg-{{ $project->project_id }}"><i
                                                                                class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                                        <label id="edit-first-filename-{{ $project->project_id }}" for="edit-first-upload-bg-{{ $project->project_id }}"
                                                                            class="editFileName editFileName-{{ $loop->iteration }} editFileNamePos-2">{{ $project->first_page_bg }}</label>
                                                                    </div>
                                                                    <input id="edit-first-upload-bg-{{ $project->project_id }}" name="first_page_bg"
                                                                        type="file" class="editFileInput editFileInput-{{ $loop->iteration }} editFileInputPos-2">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="edit-trailer-link-{{ $project->project_id }}">trailer link</label>
                                                                <input id="edit-trailer-link-{{ $project->project_id }}" name="trailer_link" value="{{ $project->trailer_link }}" type="text">
                                                            </div>
                                                            <div class="col">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col description-row">
                                                                <label for="edit-description-{{ $project->project_id }}">description</label>
                                                                <textarea name="description" id="edit-description-{{ $project->project_id }}" cols="50" rows="3">{{ $project->description }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page">
                                                        <h4>second page</h4>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="edit-second-upload-bg-{{ $project->project_id }}" class="upload_bg">upload
                                                                    bg image</label>
                                                                <div class="upload-btn">
                                                                    <div class="fake-input">
                                                                        <label for="edit-second-upload-bg-{{ $project->project_id }}"><i
                                                                                class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                                        <label id="edit-second-filename-{{ $project->project_id }}" for="edit-second-upload-bg-{{ $project->project_id }}"
                                                                            class="editFileName editFileName-{{ $loop->iteration }} editFileNamePos-3">{{ $project->second_page_bg }}</label>
                                                                    </div>
                                                                    <input id="edit-second-upload-bg-{{ $project->project_id }}" name="second_page_bg"
                                                                        type="file" class="editFileInput editFileInput-{{ $loop->iteration }} editFileInputPos-3">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="awards">awards</label>
                                                                <i class="fa-solid fa-circle-plus"></i>
                                                            </div>
                                                            <div class="col">
                                                                <label for="press-mentions">press mentions</label>
                                                                <i class="fa-solid fa-circle-plus"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page">
                                                        <h4>third page</h4>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="edit-third-upload-bg-{{ $project->project_id }}" class="upload_bg">upload
                                                                    bg image</label>
                                                                <div class="upload-btn">
                                                                    <div class="fake-input">
                                                                        <label for="edit-third-upload-bg-{{ $project->project_id }}"><i
                                                                                class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                                        <label id="edit-third-filename-{{ $project->project_id }}" for="edit-third-upload-bg-{{ $project->project_id }}"
                                                                            class="editFileName editFileName-{{ $loop->iteration }} editFileNamePos-4">{{ $project->third_page_bg }}</label>
                                                                    </div>
                                                                    <input id="edit-third-upload-bg-{{ $project->project_id }}" name="third_page_bg"
                                                                        type="file" class="editFileInput editFileInput-{{ $loop->iteration }} editFileInputPos-4">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="online-stores">online stores</label>
                                                                <i class="fa-solid fa-circle-plus"></i>
                                                            </div>
                                                            <div class="col">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="edit-modding-editor-link-{{ $project->project_id }}">modding editor link</label>
                                                                <input id="edit-modding-editor-link-{{ $project->project_id }}" name="modding_editor_link" value="{{ $project->modding_editor_link }}"
                                                                    type="text">
                                                            </div>
                                                            <div class="col">
                                                                <label for="edit-documentation-link-{{ $project->project_id }}">documentation link</label>
                                                                <input id="edit-documentation-link-{{ $project->project_id }}" name="documentation_link" value="{{ $project->documentation_link }}"
                                                                    type="text">
                                                            </div>
                                                            <div class="col w-33">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page">
                                                        <h4>fourth page</h4>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="edit-fourth-upload-bg-{{ $project->project_id }}" class="upload_bg">upload
                                                                    bg image</label>
                                                                <div class="upload-btn">
                                                                    <div class="fake-input">
                                                                        <label for="edit-fourth-upload-bg-{{ $project->project_id }}"><i
                                                                                class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                                                        <label id="edit-fourth-filename-{{ $project->project_id }}" for="edit-fourth-upload-bg-{{ $project->project_id }}"
                                                                            class="editFileName editFileName-{{ $loop->iteration }} editFileNamePos-5">{{ $project->fourth_page_bg }}</label>
                                                                    </div>
                                                                    <input id="edit-fourth-upload-bg-{{ $project->project_id }}" name="fourth_page_bg"
                                                                        type="file" class="editFileInput editFileInput-{{ $loop->iteration }} editFileInputPos-5">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="creative-team">creative team</label>
                                                                <i class="fa-solid fa-circle-plus"></i>
                                                            </div>
                                                            <div class="col w-33">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page">
                                                        <div class="row footer">
                                                            <button type="submit" class="add-btn btn btn-main ml-auto">
                                                                <span
                                                                    class="text-uppercase d-inline-block fw-600">update</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ url('/admin/projects/delete-project/' . $project->project_id) }}"
                                    onclick="return confirm(&quot;Confirm Delete?&quot;)"><i
                                        class="delete fa-solid fa-trash bg-red"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- MODALS --}}
@section('modals')
@endsection
