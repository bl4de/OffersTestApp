<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Offers Canada/USA</title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
        <link rel="stylesheet" href="styles/application.css" />
    </head>
    <body ng-app="Application" ng-controller="ApplicationController">
        <popup id="popup-modal" ng-show="showpopup" header="popup.header" content="popup.content" callback="popup.okCallback()"></popup>
        <div id="form-modal" ng-show="showform">
            <div class="container-fluid">
                <form role="form" class="form-vertical">
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-xs-3">
                                <label for="company">company name</label>
                                <input type="text" class="form-control input-sm " id="company" ng-model="offer.company" placeholder="company name..." />
                            </div>
                            <div class="form-group col-xs-3">
                                <label for="position">position</label>
                                <input type="text" class="form-control input-sm " id="position" ng-model="offer.position" placeholder="position name..." />
                            </div>
                            <div class="form-group col-xs-3">
                                <label for="link">link</label>
                                <input type="text" class="form-control input-sm " id="link" ng-model="offer.link" placeholder="link..." />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-3">
                                <label for="country">country</label>
                                <!-- TODO - select with Canada and United States -->
                                <select class="form-control input-sm " name="country" id="country" ng-model="offer.country">
                                    <option value="">select country: </option>
                                    <option value="United States">United States</option>
                                    <option value="Canada">Canada</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-3">
                                <!-- TODO - select with states/provinces depends on 'country' -->
                                <label for="state">state/province</label>
                                <select class="form-control input-sm " name="state" id="state" ng-model="offer.state">
                                    <option value=""> select state or province: </option>
                                    <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="YT">Yukon</option>
                                    <option value=""></option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-3">
                                <label for="city">city</label>
                                <input type="text" class="form-control input-sm " id="city" ng-model="offer.city" placeholder="city name..." />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-3">
                                <label for="status">status</label>
                                <select  class="form-control input-sm" name="status" id="status" ng-model="offer.status">
                                    <option value="">select status: </option>
                                    <option value="sent">Sent, waiting for response</option>
                                    <option value="later">Rejected for now, maybe later (must improve in some discpilines)</option>
                                    <option value="interview">Accepted for interview</option>
                                    <option value="task">Accepted for test task</option>
                                    <option value="later">To sent later (must be provided some informations)</option>
                                    <option value="must_resend">Must resend</option>
                                    <option value="rejected">Rejected definetly</option>
                                    <option value="accepted">Accepted !!! :D We're going to North America !!! :D</option>
                                </select>
                            </div>
                            <div class="form-input col-xs-3">
                                <label for="descripton">description</label>
                                <textarea name="description" ng-model="offer.description" rows="4" cols="70"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-3">
                                <button type="button" class="btn btn-success" ng-click="saveOffer()">Save</button>
                                <button type="button" class="btn btn-danger" ng-click="cancelForm()">Cancel</button>
                                <input type="hidden" name="id" ng-model="offer.id" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand">Offers Canada/USA</span>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <input type="text" ng-model="searchText" class="form-control input-sm" placeholder="Search in offers...">
                        <button type="button" class="btn btn-danger" ng-click="init()">Reset all</button>
                        <button type="button" class="btn btn-success" ng-click="addOffer()"><i class=""></i>&emsp;Add new offer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row fixed">
                <p>
                    Offers send:<strong>{{offers.length}}</strong> |&emsp;
                      Offers filtered: <strong>{{data.length}}</strong> | &emsp;
                    <span>
                        Display offers only from: 
                        <img src="images/canada.jpg" ng-click="searchText='canada'" style="height:24px; cursor:pointer;" title="Offers from Canada only" />
                        <img src="images/usa.jpg" ng-click="searchText='united states'" style="height:24px; cursor:pointer;" title="Offers from USA only" />
                    </span>
                </p>
                <div class="legend">
                    Legend (click to specified status to filter offers):
                    <span class="rejected" ng-click="searchText='rejected'">Rejected :(</span>
                    <span class="orange-bg" ng-click="searchText='must_resend'">Must resend</span>
                    <span class="blue-bg" ng-click="searchText='interview'">Interview</span>
                    <span class="yellow-bg" ng-click="searchText='task'">Test task</span>
                    <span class="green-bg" ng-click="searchText='accepted'">Accepted</span>
                    <span class="" ng-click="searchText='sent'">Sent</span>
                    <span class="red-bg" ng-click="searchText='later'">To sent later</span>
                    <a class="btn btn-danger btn-xs clear-btn" ng-click="searchText=''">Clear selection</a>
                </div>
            </div>
            <div class="row table-block">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company name</th>
                            <th>Position</th>
                            <th>Country</th>
                            <th>City, State/Province</th>
                            <th>Link</th>
                            <th>Date added</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-click="showDetails(offer)" ng-class="{'yellow-bg':offer.status=='task',
                            'red-bg':offer.status=='later','blue-bg':offer.status=='interview',
                            'green-bg':offer.status=='accepted','orange-bg':offer.status=='must_resend',
                            rejected:offer.status=='rejected'}"
                            ng-repeat="offer in data = (offers|filter:searchText)" title="{{ offer.description }}">
                            <td>{{ offer.id }}</td>
                            <td>{{ offer.company }}</td>
                            <td>{{ offer.position }}</td>
                            <td>{{ offer.country }}</td>
                            <td>{{ offer.city }}, {{ offer.state }}</td>
                            <td><a class="link" href="{{ offer.link }}" target="_blank">click to open</a></td>
                            <td>{{ offer.added|date:'yyyy-MM-dd' }}</td>
                            <td>{{ offer.status }}</td>
                            <td>
                                <i class="glyphicon glyphicon-edit" ng-click="editOffer(offer.id)"></i>&emsp;
                                <i class="glyphicon glyphicon-trash red" ng-click="deleteOffer(offer.id)"></i>&emsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- vendors -->
        <script src="scripts/lib/jquery.min.js"></script>
        <script src="scripts/lib/angular.min.js"></script>
        <script src="scripts/lib/bootstrap.min.js"></script>
        <!-- application -->
        <script src="scripts/application.js"></script>
    </body>
</html>