import React, { Component, Suspense, lazy } from 'react';
import { BrowserRouter, Switch, Route} from 'react-router-dom';
import {connect} from 'react-redux';
import {getToken} from "./Actions";

import './App.sass';
import LoadingFull from "./Components/LoadingFull";

const Home = lazy(() => import("./Components/Pages/Home"));
const Login = lazy(() => import("./Components/Pages/Login"));
const Header = lazy(() => import("./Components/Header"));
const MessageBar = lazy(() => import("./Components/MessageBar"));

class App extends Component {

  componentDidMount = () => {
      this.props.getToken();
  };

  render() {
      const {token} = this.props;

      return (
          <BrowserRouter>
              <Suspense fallback={<LoadingFull/>}>
                  <Header/>
                  <Switch>
                      <Route exact path="/">
                          {token ? <Home/> : <Login/>}
                      </Route>
                      <Route path="*">
                          404
                      </Route>
                  </Switch>
                  <MessageBar/>
              </Suspense>
          </BrowserRouter>
      );
  }
}

const mapStateToProps = state => ({
    token: state.user.token
});

const mapDispatchToProps = dispatch => ({
    getToken: () => dispatch(getToken()),
});

export default connect(mapStateToProps, mapDispatchToProps)(App);
