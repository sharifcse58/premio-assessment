@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="row">
            <div class="container">
                <div class="mt-5">
                    <h4 v-if="formData.rules.length" v-text="jsSnippet"></h4>
                    <div class="col-md-6 m-0 p-2">
                        <label>Alert text:</label><input type="text" placeholder="Write any alert text..."
                            class="form-control" v-model="formData.alertText">
                        <span class="error" v-if="getError('alertText')" v-text="getError('alertText')"></span>
                    </div>
                    <div class="p-2" v-for="(rule, index) in formData.rules" :key="index">

                        <div class="d-flex align-items-center rules-info">

                            <select v-model="rule.show" class="form-control select_option mr-2">
                                <option class="select_item" value="show">Show</option>
                                <option class="select_item" value="hide">Don't Show</option>
                            </select>

                            <select v-model="rule.type" class="form-control select_option mr-2">
                                <option class="select_item" value="">Select Rule</option>
                                <option class="select_item" value="contains">pages that contains</option>
                                <option class="select_item" value="specific_page">a specific page</option>
                                <option class="select_item" value="start_with">pages starting with</option>
                                <option class="select_item" value="ends_with">pages ending with</option>
                                <option class="select_item" value="exact">Exact</option>
                            </select>

                            <p class="pt-3 pl-2 pr-2 align-items-center" v-text='domain'></p>

                            <input v-model="rule.value" :name="'rules[' + index + '][value]'" type="text"
                                class="form-control mr-2">

                            <button @click="deleteRule(rule.id)" class="btn btn-danger">x</button>
                        </div>
                        <div class="d-flex justify-content-end">
                            <span class="error" v-if="getError('rules.' + index + '.show')"
                                v-text="getError('rules.' + index + '.show')"></span>
                            <span class="error" v-if="getError('rules.' + index + '.type')"
                                v-text="getError('rules.' + index + '.type')"></span>
                            <span class="error" v-if="getError('rules.' + index + '.value')"
                                v-text="getError('rules.' + index + '.value')"></span>
                        </div>
                    </div>

                    <div class="d-flex justify-between gap-4">
                        <button @click="addRule" class="btn add-more">Add Rule</button>
                        <button @click="saveRules" class="btn ml-2 save-btn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@endpush

@push('custom_css')
    <style>
        .rules-info {
            background-color: #F6F3FA;
        }

        .select_option {
            border-color: #81AAB9;
            border-width: 2px;
            color: #81AAB9;
        }

        select option {
            background-color: #fff;
            color: #81AAB9;
        }

        .add-more {
            background-color: #F66622;
            color: white
        }

        .save-btn {
            background-color: #81AAB9;
            color: white
        }

        .error {
            color: red;
            display: block;
            margin-top: 5px;
        }

        .input-container {
            margin-bottom: 15px;
        }
    </style>
@endpush
