import React, {Component, lazy, Suspense} from 'react';
import PropTypes from 'prop-types';
import {connect} from "react-redux";
import Section from "../Section";
import Icon from "../Icon";
import {Link} from "react-router-dom";
import Product from "../Product";

class Home extends Component {
    componentDidMount() {
    }

    render() {
        return (
            <>
                <Section
                    className='top-articles-section'
                    sectionTop={
                        <>
                            <h3 className="section__title">Каталог</h3>
                            <div className="section__top-container">

                            </div>
                        </>
                    }
                >
                    <div className='catalog'>
                        <div className="items catalog__items">
                            <div className="items__wrapper">
                                <Product/>
                            </div>
                        </div>
                    </div>
                </Section>
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
