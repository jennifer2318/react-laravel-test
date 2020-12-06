import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {Link} from "react-router-dom";

class Product extends Component {
    render() {
        return (
            <div className="item product-item">
                <div className="item__content">
                    <div className="item__info">
                        <h4 className="item__title">
                            <Link to="#" className="item__title-link button">
                                <span>Смартфон SY 15</span>
                            </Link>
                        </h4>
                        <div className="item__description">
                            <span>Арт.: D98186A5</span>
                        </div>
                        <div className="item__price price">
                            <div className="price__value">30 000</div>
                            <div className="price__currency">₽</div>
                        </div>
                    </div>
                </div>
                <div className="item__buttons">
                    <Link to='#' className="item__buttons-element button btn-accent">Подробнее</Link>
                </div>
            </div>
        );
    }
}

Product.propTypes = {};

export default Product;
