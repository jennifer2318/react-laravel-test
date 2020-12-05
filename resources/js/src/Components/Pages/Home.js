import React, {Component, lazy, Suspense} from 'react';
import PropTypes from 'prop-types';
import {connect} from "react-redux";

class Home extends Component {
    componentDidMount() {
    }

    render() {
        return (
            <>
            </>
        );
    }
}

Home.propTypes = {};

const mapStateToProps = state => ({

});

const mapDispatchToProps = dispatch => ({

});

export default connect(mapStateToProps, mapDispatchToProps)(Home);
